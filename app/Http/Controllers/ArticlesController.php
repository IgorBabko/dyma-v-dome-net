<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Article;
use Nicolaslopezj\Searchable\SearchableTrait;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate();
        return view('articles.index', compact('articles'));
    } 

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function search(Request $request)
    {
        $articles = Article::search($request->queryString)->get();
        $searchCount    = count($articles);

        return view('articles.index', compact('articles', 'searchCount'));
    }
}
