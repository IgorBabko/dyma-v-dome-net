<header id="header" class="navbar-inverse video-menu" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="feature_title nav-logo"><a href="/"><span style="color: white">Тепло</span><b style="color: #EE8B24">Квартал</b></a></h1>
            <div class="contacts"><span><i class="fa fa-phone" aria-hidden="true"></i> (095) 57-57-677</span>
                <br><span><i class="fa fa-phone" aria-hidden="true"></i> (097) 87-161-97</span>
                <br><span><i class="fa fa-envelope" aria-hidden="true"></i> i.i.babko@gmail.com</span>
            </div>
        </div>
        @include ('partials.nav')
    </div>
    <div class="top-line" id="chimneys">
        <div class="container">
            <div class="row">
                <div class="col-md-6 search">
                    <form action="/search/chimneys" style="text-align: left">
                        <span style="display: inline-block; position: relative">
                            <input type="text" class="search_input" placeholder="Что Вы ищите?">
                            <i class="fa fa-search" style="position: absolute; top: 15px; right: 10px; font-size: 20px; color: #666" aria-hidden="true"></i>
                        </span>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul class="submenu">
                        <li><a href="/chimneys/one-wall">одностенные</a></li>
                        <li><a href="/chimneys/warmed">утепленные</a></li>
                        <li><a href="/chimneys/alyukom">алюком</a></li>
                        <li><a href="/chimneys/ceramic">керамические</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</header>
