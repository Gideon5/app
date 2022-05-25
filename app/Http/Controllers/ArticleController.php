<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function show() {

      $articles = Article::all();

        return view('article',['articles' => $articles]);
       }


    public function create() {

        return view('create');


    }
    
    public function edit(Article $article) {



        
        

        return view('edit', ['article'  => $article]);


        
   
    }

    public function update(Article $article) {

        request()->validate([

            'title' => 'required',
            'body' => 'required'
        ]);
        


        $article->update([
            'title' => request('title'),
            'body' => request('body'),
        ]);



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


    


    public function destroy(Article $article){

        
        $article->delete();

        return redirect('/article');
    }


    
       
}
