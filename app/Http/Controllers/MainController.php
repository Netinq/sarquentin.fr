<?php


namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class MainController extends Controller
{
    public function index()
    {
        $ch = curl_init('https://www.google.com/maps?cid=6809752863795946512&ucbcb=1');
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla / 5.0 (Windows; U; Windows NT 5.1; en - US; rv:1.8.1.6) Gecko / 20070725 Firefox / 2.0.0.6");
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Language: fr'));
        $result = curl_exec($ch);
        curl_close($ch);
        $pattern = '/window\.APP_INITIALIZATION_STATE(.*);window\.APP_FLAGS=/ms';
        if ( preg_match($pattern, $result, $match) ) {
            $match[1] = trim($match[1], ' =;'); /* fix json */
            $reviews  = json_decode($match[1]);
            $reviews  = ltrim($reviews[3][6], ")]}'"); /* fix json */
            $reviews  = json_decode($reviews);
            $reviews  = $reviews[6][175][9][0][0]; // NEW IN 2020
        }
        $clients = ['shyroquizz', 'impex', 'districtgames', 'lexnea', 'bst', 'animecards'];

        $contentsDAO = Section::all()->load('contents');
        $contents = new Json();
        foreach($contentsDAO as $content) {
            $jsonName = $content->htmlid;
            $contents->$jsonName = new Json();
            foreach($content->contents as $content) {
                $jsonSubName = $content->htmlclass;
                $contents->$jsonName->$jsonSubName = $content->content;
            }
        }
        return view('index', compact('clients', 'reviews', 'contents'));
    }

    public function legal()
    {
        return view('legal');
    }

    public function legal()
    {
        return view('lapotion');
    }

}
