<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact("shops"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requsetData = $request->all();

        //上傳檔案
        $file_name = $request->file('image')->store('', 'public');
        $requsetData['image'] = $file_name;

        Shop::create($requsetData);

        return redirect('/admin/shops');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shops.edit', compact("shop"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);

        $requsetData = $request->all();
        // dd($request->file('image'));

        if ($request->file('image') == null) {
            $shop->name = $request->name;
            $shop->address = $request->address;
            $shop->media = $request->media;
            $shop->save();
        } else {

            $file_name = $request->file('image')->store('', 'public');
            $requsetData['image'] = $file_name;

            $shop->update($requsetData);
        }


        return redirect('/admin/shops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect('/admin/shops');
    }
}
