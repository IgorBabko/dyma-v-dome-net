@extends('layout')

@section('content')
    <section id="about" style="min-height: calc(100vh - 70px); padding: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feature_header text-center">
                        <h3 class="feature_title"><span style="color: white">Тепло </span><b>Квартал</b></h3>
                        <!--<div class="divider"></div>-->
                        <!--<h4 class="feature_sub" style="color: white">Виды деятельности</h4>-->
                        <div class="Contacts">
                            <div class="Contacts__item"><span>Виталий:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (050) 67-67-766</div>
                            <div class="Contacts__item"><span>Александр:</span>&nbsp; (097) 87-161-97</div>
                            <div class="Contacts__item"><span>Александр:</span>&nbsp; <a href="/contact">i.i.babko@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="feature-tab">
                    <div class="col-md-6">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <img src="/img/dymohodi.png" alt="" class="img-responsive">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <img src="images/about/marketing.png" alt="" class="img-responsive">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <img src="images/about/browse.png" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#home" role="tab" data-toggle="tab">
                                    <div class="col-sm-12 single-feature">
                                        <div class="col-sm-2 feature-icon">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                        <div class="col-sm-10 feature-content">
                                            <h4>Дымоходы</h4>
                                            <p>Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia
                                                deserunt mollit anim.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile" role="tab" data-toggle="tab">
                                    <div class="col-sm-12 single-feature">
                                        <div class="col-sm-2 feature-icon">
                                            <i class="fa fa-send"></i>
                                        </div>
                                        <div class="col-sm-10 feature-content">
                                            <h4>Брикеты</h4>
                                            <p>Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia
                                                deserunt mollit anim.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" role="tab" data-toggle="tab">
                                    <div class="col-sm-12 single-feature">
                                        <div class="col-sm-2 feature-icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="col-sm-10 feature-content">
                                            <h4>Утилизаторы</h4>
                                            <p>Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia
                                                deserunt mollit anim.</p>
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
    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="Footer__menu">
                        <li class="Footer__menu-item">Документация</li>
                        <li class="Footer__menu-item">FAQ</li>
                        <li class="Footer__menu-item">Статьи</li>
                        <li class="Footer__menu-item">Партнерам</li>
                        <li class="Footer__menu-item">Контакты</li>
                    </ul>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <div class="footer_bottom">
                        <p class="text-block">© Тепло квартал 2016</p>
                    </div>
                </div>
                <!--<div class="col-md-6">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li> <a href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
@stop
