@extends ('admin.layout')

@section ('content')
<div class="page">
    <div class="container">
        <h1>Заявки</h1>
        <div class="divider"></div>
        <div class="row">
            <div class="col-xs-12">
                @include ('partials.flash')
            </div>
            @foreach($orders as $order)
            <div class="order">
                <div class="col-xs-12">
                    <span class="pull-right" style="font-size: 16px">{{ $order->created_at->format('d.m.Y') }} </span> 
                    <h3><strong>№ {{ $order->id }}</strong></h3>
                    <h3>Контактное лицо: {{ $order->client_name }} </h3> 
                    <h4>Контактные данные:</h4>
                    <ul>
                        <li>Телефон 1: <strong>{{ $order->phone1 }}</strong></li>
                        <li>Телефон 2: <strong>{{ $order->phone2 }}</strong></li>
                        <li>Email: <strong>{{ $order->email }}</strong></li>
                    </ul>

                    <h4>Суть вопроса</h4>
                    <p class="description">{!! $order->question !!}</p>
                </div>
                <div class="col-xs-12">
                    <form action="/admin/orders/{{ $order->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger pull-right" style="margin-right: 5px">Удалить</a>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        {!! $orders->render() !!}
    </div>
</div>
@stop
