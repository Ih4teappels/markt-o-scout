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
    public function postComment(Request $request) {
    
        $adId = Comment::id();

        $id = DB::table('comments')->insertGetId(
            [
                'id' =>$request['id'],
                'content' => $request['content'],
                'user_id' => Auth::id(),
                'ad_id' => $adId,
            ]
        );



        return redirect('/ad/' . $id);
    
    }
}
