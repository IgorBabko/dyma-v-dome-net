@extends('layout')

@section('content')
<section class="gray-section">
    <div class="container">
        <div class="row resource-expanded">
            <div class="col-xs-12">
                <h3>{{ $chimney->name }}</h3>
                <img class="img-responsive" src="{{ $chimney->image }}" alt="">
            </div>
            <div class="col-xs-12">
                <div class="article-text">{!! $chimney->content !!}</div>
                <a class="btn Button" href="/chimneys/catalog/{{ $type }}">назад <span class="glyphicon glyphicon-chevron-left"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
