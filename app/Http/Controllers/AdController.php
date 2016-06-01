<?php

namespace App\Http\Controllers;


use App\Ad;
use App\Category;
use DB;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::table('ad')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        $oneAd = DB::table('ads')->where('user_id', $user_id)->get();
        // $oneAd = Ad::pluck('product_name', 'product_desc');

        return view('/myAd', compact('oneAd'));
    }

    public function allAds()
    {
        $ads = Ad::pluck('product_name', 'product_desc');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();

        $image_name = $request->file('image')->getClientOriginalName();

        if ($request->hasFile('image')){
            $request->file('image')->move(public_path().'\dbEntries\adImages', $image_name);
        }

        DB::table('ads')->insert(
            [
                'product_name' =>$request['product_name'],
                'product_desc' => $request['product_desc'],
                'city' => $request['city'],
                'price' => $request['price'],
                'user_id' => $id,
                'image' => $image_name,
                'category_id' => $request['category_id'],
            ]

        );

        return redirect('myAd');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postCreateAd() {
        $ads = Ad::all();
        return view('\myAd', ['ads' => $ads]);
    }
}