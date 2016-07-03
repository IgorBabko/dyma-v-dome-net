@extends('layout')

@section('content')
<section class="gray-section">
    <div class="container">
        <div class="row article-expanded">
            <div class="col-xs-12">
                <h3>{{ $page->name }}</h3>
                <img class="img-responsive" src="{{ $article->image }}" alt="">
            </div>
            <div class="col-xs-12">
                <div class="article-text">{!! $page->content !!}</div>
                <a class="btn Button" href="/articles">назад <span class="glyphicon glyphicon-chevron-left"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
@extends('layout') @section('content')
<div class="page">
    <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Страницы' }}</h1>
    <div class="divider"></div>
    <div class="container">
        @if ( Request::is('articles/search*') )
            @include ('partials.search-results', ['returnUrl' => '/articles'])
        @endif
        @if (count($articles))
            @foreach ($articles as $article)
            <div class="row article">
                <div class="col-md-7">
                    <img class="img-responsive" src="{{ $article->image }}" alt="">
                </div>
                <div class="col-md-5" style="position: static">
                    <h3>{{ $article->name }}</h3>
                    <div>{!! $article->desc !!}</div>
                    <a class="btn Button Button__more--positioned" href="/articles/{{ $article->id }}">подробнее<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('articles/search*')) 
               {!! $articles->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
