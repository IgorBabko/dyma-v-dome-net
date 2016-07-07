@extends('layout') @section('content')
<div class="page">
    <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Статьи' }}</h1>
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
                    <a class="btn Button Button__more--positioned" href="/articles/{{ $article->id }}"><i class="fa fa-chevron-right" aria-hidden="true"></i> подробнее</a>
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
