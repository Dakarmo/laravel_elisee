<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index() 
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();

        return view('articles.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
