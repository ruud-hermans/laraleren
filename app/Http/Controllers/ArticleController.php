<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($articleId){
        $article = Article::find($articleId);

        return view('articles.show',[
            'article' => $article
        ]);
    }

    public function showAll(){
        
        return view('articles',[
            'articles' => $articles = Article::paginate(2)
        ]);
    }

    public function create(){
        

        return view('articles.create');
    }
}
