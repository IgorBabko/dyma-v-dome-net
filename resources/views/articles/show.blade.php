@extends('layout')

@section('content')
<section class="gray-section">
    <div class="container">
        <div class="row article-expanded">
            <div class="col-xs-12">
                <h3>{{ $article->title }}</h3>
                <img class="img-responsive" src="{{ $article->image }}" alt="">
            </div>
            <div class="col-xs-12">
                <p class="article-text">{!! $article->text !!}</p>
                <a class="btn Button" href="/articles">назад <span class="glyphicon glyphicon-chevron-left"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
