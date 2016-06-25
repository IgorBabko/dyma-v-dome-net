@extends('layout') @section('content')
<div class="jumbotron" style="margin: 120px 0 0; background: white">
    <div class="container">
        <div class="row" style="margin-bottom: 100px">
            <h1 style="text-align: left">О нас</h1>
            <p>
                Наша компания занимается изготовлением, продажей, а также монтажом дымоходов, газоходных
                и дымоходных систем и других элементов дымоходов. Мы производим
                дымоходы любой сложности. Дымоходы и дымоходные системы, изготавливаются
                высококвалифицированными специалистами.
            </p>
            <p>Для изготовления дымоходов мы используем жаростойкую нержавеющую сталь
                марки AISI 430, 304, 321 толщиной от 0,5 до 1мм. Эта сталь обладает
                превосходной коррозионной стойкостью, используется для дымоходов
                с высокой рабочей температурой.</p>
            <p>Дымоходы из нержавеющей стали являются наиболее практичными, по сравнению
                с металлическими дымоходами из черной стали. Важным отличием нержавеющего
                дымохода от других типов дымоходов и дымоходных систем является
                его внешний вид, который не требует дополнительной отделки. Дымоходы
                из нержавеющей стали придадут любому интерьеру эксклюзивность и
                подчеркнут высокую эстетичность помещения.
            </p>
            <p>
                <a class="btn btn-warning btn-lg pull-right" href="/briquettes/catalog" role="button">Посмотреть каталог</a>
                <a class="btn btn-success btn-lg pull-right" href="/order" role="button" style="margin-right: 20px">Оформить заявку</a>
            </p>
        </div>

        <div class="row">
            <div class="slick-carousel">
                <div>
                    <img src="/images/briquettes/one-wall/leyka.jpg">
                </div>
                <div>
                    <img src="/images/briquettes/one-wall/podstavka.jpg">
                </div>
                <div>
                    <img src="/images/briquettes/one-wall/kagla.jpg">
                </div>
                <div>
                    <img src="/images/briquettes/one-wall/leyka.jpg">
                </div>
                <div>
                    <img src="/images/briquettes/one-wall/podstavka.jpg">
                </div>
                <div>
                    <img src="/images/briquettes/one-wall/kagla.jpg">
                </div>
            </div>
        </div>
    </div>
</div>
@stop
