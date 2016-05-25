<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getAccount() {
        return view('account', ['user' => Auth::user()]);
    }

    public function postSaveAccount(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:120'
        ]);

        $user = Auth::user();

        $user->name = Request::input('name');
        $user->username = Request::input('username');
        $user->email = Request::input('email');
        $user->save();

        $this->validate($request, [
            'name' => 'required|max:120'
        ]);

        // Auth::user('name')->update;

        return view('account');
        
    }
}
