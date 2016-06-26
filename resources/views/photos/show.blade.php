@extends('layout')

@section('content')
<section class="gray-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>{{ $photo->title }}</h3>
                <img class="img-responsive" src="{{ $photo->image }}" alt="">
            </div>
            <div class="col-xs-12">
                <p class="article-text">{!! $photo->description !!}</p>
                <a class="btn Button" href="/photos">назад <span class="glyphicon glyphicon-chevron-left"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
