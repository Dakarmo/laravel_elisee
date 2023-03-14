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
        $article = Article::with('user')->where('id', $id)->firsOrFail();

        return view('articles.show', compact('article'))
    }
}
