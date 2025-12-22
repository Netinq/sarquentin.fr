<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $reviews = $this->getGoogleReviews();
        $clients = ['shyroquizz', 'impex', 'districtgames', 'lexnea', 'bst', 'animecards', 'cavaly'];

        $contentsDAO = Section::all()->load('contents');
        $contents = new \stdClass();
        foreach ($contentsDAO as $section) {
            $jsonName = $section->htmlid;
            $contents->$jsonName = new \stdClass();
            foreach ($section->contents as $content) {
                $jsonSubName = $content->htmlclass;
                $contents->$jsonName->$jsonSubName = $content->content;
            }
        }

        return view('index', compact('clients', 'reviews', 'contents'));
    }

    private function getGoogleReviews(): array
    {
        $cached = Cache::get('google_reviews');
        if ($cached !== null) {
            return $cached;
        }

        $apiKey = config('services.google.places_api_key');
        if (!$apiKey) {
            return [];
        }

        try {
            $response = Http::withoutVerifying()
                ->withHeaders([
                    'X-Goog-Api-Key' => $apiKey,
                    'X-Goog-FieldMask' => 'rating,userRatingCount,reviews',
                ])
                ->get('https://places.googleapis.com/v1/places/ChIJRwquh9XFVA0REKTBZiYagV4?languageCode=fr');

            if ($response->successful()) {
                $data = $response->json();
                $reviews = [
                    'rating' => $data['rating'] ?? null,
                    'total' => $data['userRatingCount'] ?? 0,
                    'reviews' => array_map(fn($r) => [
                        'author' => $r['authorAttribution']['displayName'] ?? 'Anonyme',
                        'photo' => $r['authorAttribution']['photoUri'] ?? null,
                        'rating' => $r['rating'] ?? 5,
                        'text' => $r['text']['text'] ?? '',
                        'time' => $r['relativePublishTimeDescription'] ?? '',
                    ], $data['reviews'] ?? []),
                ];
                Cache::put('google_reviews', $reviews, 10800); // 3h
                return $reviews;
            }
        } catch (\Exception $e) {
            report($e);
        }

        return [];
    }

    public function legal()
    {
        return view('legal');
    }

    public function lapotion()
    {
        return view('lapotion');
    }

}
