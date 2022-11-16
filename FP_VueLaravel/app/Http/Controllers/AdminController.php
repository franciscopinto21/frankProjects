<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminview(){
        $param = [
            'param 1'=>'21',
            'param 2'=>'45',
            'param 3'=>'34'
        ];
        return view('app.admin.admin', compact('param'));
    }
}
