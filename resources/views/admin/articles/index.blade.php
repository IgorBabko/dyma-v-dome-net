@extends('admin.layout') @section('content')
<div class="page">
    <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Статьи' }}</h1>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            @if ( Request::is('admin/articles/search*') )
                @include ('partials.search-results', ['returnUrl' => '/admin/articles'])
            @endif
            <div class="col-xs-12">
                @include ('partials.flash')
            </div>
            <div class="col-xs-12" style="text-align: center; float: none">
                <a href="/admin/articles/create" style="margin-top: 20px" class="btn Button Button__add-resource Button--green">Добавить статью</a>
            </div>
        </div>
        @if (count($articles))
            @foreach ($articles as $article)
            <div class="row article">
                <div class="col-md-7">
                    <img class="img-responsive" src="{{ $article->image }}" alt="">
                </div>
                <div class="col-md-5" style="position: static">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->short_text }}</p>
                    <div class="Button__group--positioned" style="right: 40px; bottom: 40px">
                        <form action="/admin/articles/{{ $article->id }}" style="display: inline-block" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn Button pull-right" style="margin-right: 5px">Удалить</button>
                        </form>
                        <a href="/admin/articles/{{ $article->id }}/edit" class="btn Button Button--blue pull-right">Редактировать</a>
                    </div>
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
