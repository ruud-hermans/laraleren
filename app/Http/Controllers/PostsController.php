<?php

namespace App\Http\Controllers;

// use App\Models;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug){
        
        return view('post',[
                'post' => Post::where('slug', $slug)->firstOrFail()
            ]);
    }


}
