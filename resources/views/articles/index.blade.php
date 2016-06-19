@extends('layout') @section('content')
<div class="page">
    <h1>статьи</h1>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="text-align: center">
                @if (Request::is('articles/search*'))
                    <span class="search-results">Результаты поиска по запросу <span class="query-string">'{{ Request::input('queryString') }}'</span>: {{ $searchCount }}</span>
                @endif
            </div>
        </div>
        @if (count($articles))
            @foreach ($articles as $article)
            <div class="row" style="margin: 50px 0">
                <div class="col-md-7">
                    <img class="img-responsive" src="{{ $article->image }}" alt="">
                </div>
                <div class="col-md-5">
                    <h3>{{ $article->title }}</h3>
                    <p>{!! str_limit($article->text, 300) !!}</p>
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
