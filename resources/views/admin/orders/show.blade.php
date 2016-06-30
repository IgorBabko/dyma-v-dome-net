@extends('layout')

@section('content')
<section class="gray-section">
    <div class="container">
        <div class="row resource-expanded">
            <div class="col-xs-12">
                <h3>{{ $order->name }}</h3>
            </div>
            <div class="col-xs-12">
                <p class="article-text">{!! $order->text !!}</p>
                <a class="btn Button" href="/admin/orders">назад <span class="glyphicon glyphicon-chevron-left"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
