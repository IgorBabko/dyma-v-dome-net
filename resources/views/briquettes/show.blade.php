@extends('layout')

@section('content')
<section class="gray-section">
    <div class="container">
        <div class="row resource-expanded">
            <div class="col-xs-12">
                <h3>{{ $briquette->name }}</h3>
                <img class="img-responsive" src="{{ $briquette->image }}" alt="">
            </div>
            <div class="col-xs-12">
                <p class="article-text">{!! $briquette->text !!}</p>
                <a class="btn Button" href="/briquettes/catalog">назад <span class="glyphicon glyphicon-chevron-left"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
