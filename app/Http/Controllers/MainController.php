<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $clients = ['shyroquizz', 'impex', 'districtgames', 'lexnea'];
        return view('index', compact('clients'));
    }
}
