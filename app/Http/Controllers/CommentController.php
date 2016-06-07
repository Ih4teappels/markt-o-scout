<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Ad;
use App\Category;
use DB;
use Auth;
use App\Http\Requests;

class CommentController extends Controller
{
    public function postCreateComment(Request $request) {

    	$this->validate($request, [
            'content' => 'required|min:1',
        ]);

    	$userId = Auth::id();
    	$adId = Comment::user_id();

    	$id = DB::table('comments')->insertGetId(
            [
                'content' =>$request['content'],
                'ad_id' => $adId,
                'user_id' => $userId,

            ]

        );



        return redirect('/ad/' . $id);

    }
    
}
