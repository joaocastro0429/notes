<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function test($value){
        return view('test',['Test'=>$value]);
    }
}
