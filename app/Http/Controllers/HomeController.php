<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response('Selamat Datang dihalaman Home ' . request()->source_url);
    }
}
