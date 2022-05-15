<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function show() {

        return view('article');
       }

    public function create() {

        return view('create');


    }

    public function edit() {

        return view('edit');


    }
    
       
}
