<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function teste(int $p1, int $p2){
        $p3 = $p1 + $p2;
        // return view('site.teste', ['x'=>$p1,'y'=>$p2,'z'=>$p3]);
        return view('site.teste')->with('p1' , $p1)->with('p2' , $p2)->with('p3' , $p3);
        //return view('site.teste', compact('p1','p2','p3'));
    }
}
