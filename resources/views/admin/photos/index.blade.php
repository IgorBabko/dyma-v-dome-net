@extends('admin.layout') @section('content')
<div class="page">
    <div class="container">
        <div class="col-xs-12 flash-block">
            @include ('partials.flash')
        </div>
        <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Фотографии' }}</h1>
        <div class="divider"></div>
        @if ( Request::is('admin/photos/search*') ) @include ('partials.search-results',
        ['returnUrl' => '/admin/photos']) @endif
        <div class="col-xs-12" style="text-align: center; float: none">
            <a href="/admin/photos/create" style="margin-top: 20px" class="btn Button Button__add-resource Button--green">Добавить фото</a>
        </div>
        @if (count($photos)) @foreach ($photos->chunk(3) as $photosRow)
        <div class="row">
            @foreach ($photosRow as $photo)
            <div class="col-md-4 portfolio-item">
                <img class="img-responsive" src="{{ $photo->image }}" alt="">
                <div class="photo-description" style="position: relative">
                    <div>{!! $photo->desc !!}</div>
                    <div class="Button__group--positioned">
                        <form action="/admin/photos/{{ $photo->id }}" style="display: inline-block" method="POST">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                            <button class="btn Button" style="margin-right: 5px">Удалить</button>
                        </form>
                        <a href="/admin/photos/{{ $photo->id }}/edit" class="btn Button Button--blue">Редактировать</a> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
        <div class="pagination-wrapper">
            @if (!Request::is('photos/search*')) {!! $photos->render() !!} @endif
        </div>
        @endif
    </div>
</div>
@stop
