<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function secondview(){

        return view('site.second');
    }
}
