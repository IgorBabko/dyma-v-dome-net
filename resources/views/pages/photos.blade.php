@extends('layout') @section('content')
<div class="page">
    @foreach ($photos as $photo)
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <img class="img-responsive" src="{{ $photo->image }}" alt="">
            <a href="#" class="btn Button">подробнее</a>
            <p>{!! $photo->description !!}</p>
        </div>
    </div>
    @endforeach
</div>
@stop
