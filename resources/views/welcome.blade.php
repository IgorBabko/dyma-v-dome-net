<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dyma_v_dome_net</title>

    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/fuelux.min.css" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet">@if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write(
            '<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>'
        )
    </script>
    @endif

    <script src="/js/require.js"></script>
    <script>
        (function()
        {
            require.config(
            {
                config:
                {
                    moment:
                    {
                        noGlobal: true
                    }
                },
                paths:
                {
                    jquery: '/js/jquery.min',
                    bootstrap: '/js/bootstrap.min',
                    //fuelux: 'bower_components/fuelux/js', //Proper UMD/AMD to enable you to get just what you need (goes w/line 33)
                    fuelux: '/js/fuelux.min', //just grab it all (goes w/line 34)
                    moment: '/js/moment.min', // comment out if you dont want momentjs to be default
                    //underscore: 'bower_components/underscore/underscore'
                },
                shim:
                {
                    'bootstrap':
                    {
                        deps: ['jquery']
                    }
                }
            });
            //require(['fuelux/checkbox']); //get just what you need (goes w/line 26)
            require(['fuelux']); //just grab it all (goes w/line 27)
        })();
    </script>
</head>

<body class="fuelux">
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
</body>

</html>
