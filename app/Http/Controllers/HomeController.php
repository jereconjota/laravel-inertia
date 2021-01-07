<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use \App\Models\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::all()->map(function($article){
            return [
                'id' => $article->id,
                'title' => $article->title,
                'body' => $article->body,
                'destroy_link' => route('article.destroy', ['article' => $article->id])
            ];
        });
        return Inertia::render('Home', [
            'articles' => $articles,
        ]);
    }
}
