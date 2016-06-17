<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Chimney;
use Nicolaslopezj\Searchable\SearchableTrait;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('create_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    } 

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function search(Request $request)
    {
        $articles = Article::search($request->query)->get();
        $count    = count($articles);

        return view('articles.index', compact('articles'));
    }
}
