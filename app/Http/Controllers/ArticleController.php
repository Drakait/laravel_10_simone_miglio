<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        $img = null;

        if ($request->file('img')) {
        $img = $request->file('img')->store('img', 'public'); // non ho usato store('public/img') perchè mi dava problemi con laravel 13
        }

        Article::create([
        'title' => $request->input('title'),
        'author' => $request->input('author'),
        'body' => $request->input('body'),
        'img' => $img,
        ]);

        return redirect()->back()->with('success', 'Articolo creato con successo!');
    }

    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }
}
