<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Ad;
use App\Category;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Crypt;

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
    public function userAds()
    {
        $user_id = Auth::id();
        $oneAd = DB::table('ads')->where('user_id', $user_id)->get();
        // $oneAd = Ad::pluck('product_name', 'product_desc');

        return view('/myAd', compact('oneAd'));
    }

    public function singleAd($id) 
    {

        $ad = DB::table('ads')->where('id', $id)->first();
        $name = DB::table('users')->where('id', Auth::id())->first();
        
        return view('singleAd', compact('ad', 'name'));
    }

    public function recentAd(){
        $id = Auth::id();


        return view('myAd', compact('ad'));
    }

    public function allAds()
    {
        // $ads = Ad::pluck('product_name', 'product_desc');
        $ads = DB::table('ads')->get();
        $categories = Category::pluck('name');

        return view('home', compact('ads', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        $image_name = $request->file('image')->getClientOriginalName();

        if ($request->hasFile('image')){
            $request->file('image')->move(public_path().'\dbEntries\adImages', $image_name);
        }

        $id = DB::table('ads')->insertGetId(
            [
                'product_name' =>$request['product_name'],
                'product_desc' => $request['product_desc'],
                'city' => $request['city'],
                'price' => $request['price'],
                'user_id' => $userId,
                'image' => $image_name,
                'category_id' => $request['category_id'],
            ]

        );

        return redirect('/ad/' . $id);
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

    public function storeComment(Request $request){

        $userId = Auth::id();
        $pageId = $request['adId'];
        $adId = DB::table('ads')->where('id', $pageId)->first();
        echo "Dit is een print";
        print_r($adId);

        DB::table('comments')->insert(
            [
                'content' => $request['content'],
                'user_id' => $userId,
                'ad_id' => $adId->id,
            ]
        );



    return redirect('ad/' . $adId->id);
}

    public function postCreateAd() {
        $ads = Ad::all();
        return view('\myAd', ['ads' => $ads]);
    }
}