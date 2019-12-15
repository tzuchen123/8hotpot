<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Shop;

class FrontController extends Controller
{
    public function index()
    {
        $news = News::all();
        $shops = Shop::all();
        return view('index', compact("news", "shops"));
    }
}
