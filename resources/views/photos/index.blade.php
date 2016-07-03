@extends('layout') @section('content')
<div class="page">
    <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Фотографии' }}</h1>
    <div class="divider"></div>
    <div class="container">
        @if ( Request::is('/admin/photos/search*') )
            @include ('partials.search-results', ['returnUrl' => '/admin/photos'])
        @endif
        @if (count($photos))
            @foreach ($photos->chunk(3) as $photosRow)
            <div class="row">
                @foreach ($photosRow as $photo)
                <div class="col-md-4 portfolio-item">
                    <img class="img-responsive" src="{{ $photo->image }}" alt="">
                    <div class="photo-description">
                        <div>{!! $photo->desc !!}</div>
                        <a href="/photos/{{ $photo->id }}" class="btn Button Button__more--positioned" style="right: 20px; bottom: 20px">подробнее <span class="glyphicon glyphicon-chevron-right"></span></a> 
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('photos/search*'))
                {!! $photos->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
