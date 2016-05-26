<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ad = DB::table('ad')->get();

        return view('ad.index', ['ad' => $ad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user();

        DB::table('ad')->insert(
            [
                'product_name' =>$request['product_name'],
                'product_desc' => $request['product_desc'],
                'city' => $request['city'],
                'price' => $request['price'],
                'user_id' => $id->id,

            ]

        );

        $file = $request->file('image');
        $path = storage_path('app/dbEntries');

        if($file->isValid()){
            $file->move($path);
        }


        return view('ad');
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
}
