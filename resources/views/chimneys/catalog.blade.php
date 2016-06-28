@extends('layout') @section('content')
<section>
    <section id="service">
        <div class="container">

            <h1>Каталог дымоходов</h1>
            <div class="divider"></div>

            <div class="row text-center">
                <div class="col-xs-6 col-sm-4 col-md-3 hero-feature">
                    <div class="thumbnail">
                        <img src="/images/chimneys/one-wall/koleno_90_big.jpg" class="catalog-img" alt="">
                        <div class="caption">
                            <h3 style="font-size: 24px">Одностенные</h3>
                            <p>
                                <a href="/chimneys/одностенный" class="Button">Посмотреть</a> 
                                <a href="/prices/chimneys/одностенный" class="Button Button--orange">Прайс-лист</a> 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 hero-feature">
                    <div class="thumbnail">
                        <img src="/images/chimneys/termo/грибок_термо_оц.jpg" class="catalog-img" alt="">
                        <div class="caption">
                            <h3 style="font-size: 24px">Утепленные</h3>
                            <p>
                                <a href="/chimneys/утепленный" class="Button">Посмотреть</a> 
                                <a href="/prices/chimneys/утепленный" class="Button Button--orange">Прайс-лист</a> 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 hero-feature">
                    <div class="thumbnail">
                        <img src="/images/chimneys/termo/Konys_оц.jpg" alt="">
                        <div class="caption">
                            <h3 style="font-size: 24px">Алюком</h3>
                            <p>
                                <a href="/chimneys/алюком" class="Button Button">Посмотреть</a> 
                                <a href="/prices/chimneys/алюком" class="Button Button--orange">Прайс-лист</a> 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 hero-feature">
                    <div class="thumbnail">
                        <img src="/images/chimneys/termo/podstavka_mal.jpg" alt="">
                        <div class="caption">
                            <h3 style="font-size: 24px">Керамические</h3>
                            <p>
                                <a href="/chimneys/керамический" class="Button">Посмотреть</a> 
                                <a href="/prices/chimneys/керамический" class="Button Button--orange">Прайс-лист</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@stop
