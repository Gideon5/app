<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    
    public function show() {

        return view('article');
       }
    
}
