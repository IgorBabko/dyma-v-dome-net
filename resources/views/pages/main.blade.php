@extends('layout') @section('content')
<section class="section-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><span style="color: white; text-transform: uppercase">Тепло</span><b style="text-transform: uppercase; color: #EE8B24">Квартал</b></h3>
                    <!--<div class="divider"></div>-->
                    <!--<h4 class="feature_sub" style="color: white">Виды деятельности</h4>-->
                    <div class="Contacts">
                        <div class="Contacts__item"><span>Александр: </span>(095) 57-57-677</div>
                        <div class="Contacts__item" style="padding-left: 100px">(097) 87-161-97</div>
                        <div class="Contacts__item" style="padding-left: 100px"> <a href="/contact">i.i.babko@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="feature-tab">
                <div class="col-md-6">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chimneys">
                            <img src="/images/chimneys.png" alt="" class="img-responsive">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="briquettes">
                            <img src="/images/briquettes.png" alt="" class="img-responsive">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="boilers">
                            <img src="/images/boilers.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-tabs" role="tablist">
                        <h3 class="subheading_main">Что вас интересует?</h3>
                        <li role="presentation">
                            <a href="chimneys">
                                <div class="col-sm-12 single-feature">
                                    <div class="col-sm-2 feature-icon">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <div class="col-sm-10 feature-content">
                                        <h4>Дымоходы</h4>
                                        <p>excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt
                                            mollit anim.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="briquettes">
                                <div class="col-sm-12 single-feature">
                                    <div class="col-sm-2 feature-icon">
                                        <i class="fa fa-send"></i>
                                    </div>
                                    <div class="col-sm-10 feature-content">
                                        <h4>Брикеты</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt
                                            mollit anim.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="boilers">
                                <div class="col-sm-12 single-feature">
                                    <div class="col-sm-2 feature-icon">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="col-sm-10 feature-content">
                                        <h4>Утилизаторы</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt
                                            mollit anim.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
