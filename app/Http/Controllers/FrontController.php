<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Shop;
use App\Contact_us;
use App\Join_us;

class FrontController extends Controller
{
    public function index()
    {
        $news = News::all();
        $shops = Shop::all();
        return view('front.index', compact("news", "shops"));
    }

    public function join_us()
    {
        return view("front.join_us");
    }

    public function store(Request $request)
    {


        $requsetData = $request->all();

        Join_us::create($requsetData);

        return redirect('/');
    }
    public function contact_us()
    {
        return view('front.contact_us');
    }

    public function contact_store(Request $request)
    {


        $requsetData = $request->all();

        Contact_us::create($requsetData);

        return redirect('/');
    }
}
