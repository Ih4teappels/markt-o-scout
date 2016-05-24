<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Session extends Controller{

    public function getSession(Request $request, $id){

        $value = $request->session()->get('key');

        return $value;
    }
}