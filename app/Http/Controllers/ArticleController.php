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

    public function edit(Request $request, $id) {

        $request->validate([
            'title' => 'required',
            'body' => 'required' 
   
   
         ]);

         $article = Article::find($id);
         $company->title = $request->title;
         $company->body = $request->body;
         $article->save();


         return redirect('/article');


    }

    public function store(Request $request) {

            $request->validate([
            'title' => 'required',
            'body' => 'required' 
   
   
         ]);

         $article = new Article;
         $article->title = $request->title;
         $article->body = $request->body;
         $article->save();

         return redirect('/article');

    }


    


    public function destroy(Company $conpany){

        $article->delete();
        return redirect('/article');
    }
    
       
}
