@extends('layout') @section('content')
<div class="page">
    <h1>статьи</h1>
    <div class="divider"></div>
    <div class="container">
        @include ('partials.search-results', ['url' => 'articles/search*'])
        @if (count($articles))
            @foreach ($articles as $article)
            <div class="row" style="margin: 50px 0">
                <div class="col-md-7">
                    <img class="img-responsive" src="{{ $article->image }}" alt="">
                </div>
                <div class="col-md-5">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->short_text }}</p>
                    <a class="btn Button" href="/articles/{{ $article->id }}">подробнее<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            @endforeach
            @if (!Request::is('articles/search*')) 
               {!! $articles->render() !!}
            @endif
        @endif
    </div>
</div>
@stop
