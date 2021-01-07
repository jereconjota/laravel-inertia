<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use \App\Models\Article;

class ArticleController extends Controller
{
    public function create(){
        return Inertia::render('Articles/Create');
    }

    public function store(Request $request){
        Article::create($request->all());
        return redirect()->route('home');
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect()->route('home');
    }
}
