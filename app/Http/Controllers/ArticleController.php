<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function show(Article $article){
        return view('articles.show',[
            'article' => $article
        ]);
    }

    public function index(){
        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        
        
        return view('articles',[
            'articles' => $articles
        ]);
    }

    public function create(){
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    protected function validateArticle(){
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }

    public function store(){
        // Article::create($this->validateArticle());

        $article = new Article($this->validateArticle());
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect('/articles');
    }

    public function update(Article $article){
        $article->update($this->validateArticle());

        return redirect(route('articles.show', $article));
    }

    public function edit(Article $article){
        return view('articles.edit', compact('article'));
    }



}
