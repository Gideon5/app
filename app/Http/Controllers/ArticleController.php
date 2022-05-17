<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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

    public function store() {

        $input = request()->validate([
            'title' => 'required',
            'body' => 'required' 
   
   
         ]);

         return redirect('/article');

    }
    
       
}
