@extends('layout') @section('content')
<div class="page">
    <h1>фотографии</h1>
    <div class="divider"></div>
    <div class="container">
        <div class="row" style="height: 100px">
            <div class="col-xs-12" style="text-align: center">
                @if (Request::is('photos/search*'))
                    <span class="search-results">Результаты поиска по запросу <span class="query-string">'{{ Request::input('queryString') }}'</span>: {{ $searchCount }}</span>
                @endif
            </div>
        </div>
        @if (count($photos))
            @foreach ($photos->chunk(3) as $photosRow)
            <div class="row">
                @foreach ($photosRow as $photo)
                <div class="col-md-4 portfolio-item">
                    <img class="img-responsive" src="{{ $photo->image }}" alt="">
                    <p>{!! $photo->description !!}</p>
                    <a href="/photos/{{ $photo->id }}" class="btn Button">подробнее</a>
                </div>
                @endforeach
            </div>
            @endforeach
            @if (!Request::is('photos/search*'))
                {!! $photos->render() !!}
            @endif
        @endif
    </div>
</div>
@stop
