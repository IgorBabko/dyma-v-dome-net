@extends('layout') @section('content')

<div class="page">
    <div class="container">
        <h1>{{ isset($type) ? $type : 'Результаты поиска' }}</h1>
        <div class="divider"></div>
        @if ( Request::is('chimneys/search*') )
            @include ('partials.search-results', ['returnUrl' => '/chimneys/catalog'])
        @endif
        @if (count($chimneys))
            @foreach ($chimneys as $chimney)
            <div class="chimney">
                <div class="col-md-3">
                    @if ( $chimney->image )
                    <img class="img-responsive item-img" src="{{ $chimney->image }}" alt="picture">@endif
                </div>
                <div class="col-md-9">
                    <h3>{{ $chimney->name }}</h3>
                    <div class="description"><strong>Описание:</strong><br><br>{!! $chimney->desc !!}</div><br>
                    @if ($chimney->width)
                        <p class="description"><strong>Толщина:</strong> {{ $chimney->width }}</p>
                    @endif
                    {{-- <h4>Толщина: </h4>
                    <label class="radio-inline">
                        <input type="radio" name="width" value="0.5" checked="checked">0.5мм AISI 304
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="width" value="0.8">0.8мм AISI 304
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="width" value="1">1мм AISI 321
                    </label>
                    <span id="name" style="display: none">{{ $chimney->name }}</span> --}}
                    <p class="description"><strong>Тип:</strong> {{ $chimney->type }}</p>
                </div>
                <div class="col-xs-12">
                    <a class="btn Button Button__more" href="/chimneys/catalog/{{ $type }}/{{ $chimney->id }}"><i class="fa fa-chevron-right" aria-hidden="true"></i> подробнее</a>
                </div>
            </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('chimneys/search*')) 
               {!! $chimneys->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
