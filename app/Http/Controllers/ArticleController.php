<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function show() {

        $articles = Article::orderBy('id')->get();

        return view('article',compact('articles'));
       }

    public function create() {

        return view('create');


    }
    
    public function edit(Article $article) {

        
        

        return view('edit');


        
   
    }

    public function update(Request $request, $id) {

        $request->validate([
            'title' => 'required',
            'body' => 'required' 
   
   
         ]);
         

         $article = Article::find($id);
         $article->title = $request->title;
         $article->body = $request->body;
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


    


    public function destroy(Request $request){
        dd($request);

        $id = $request->input('id');
        Article::find($id)->delete();

        return redirect()->route('article')
            ->with('success', 'Product deleted successfully');
    }


    
       
}
