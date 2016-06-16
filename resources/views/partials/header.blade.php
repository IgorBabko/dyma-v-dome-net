<header id="header" class="navbar-inverse navbar-fixed-top video-menu" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="feature_title nav-logo"><a href="/"><span style="color: white">Тепло</span><b style="color: #EE8B24">Квартал</b></a></h1>
            <div class="contacts-small-screen"><span><i class="fa fa-phone" aria-hidden="true"></i> (095) 57-57-677</span>
                <br><span><i class="fa fa-phone" aria-hidden="true"></i> (097) 87-161-97</span>
                <br><span><a href="/contact" style="color: #aaa"><i class="fa fa-envelope" aria-hidden="true"></i> i.i.babko@gmail.com</a></span>
            </div>
        </div>
        @include ('partials.nav')
    </div>
    <div class="top-line" id="chimneys">
        <div class="container">
            <div class="row">
                <div class="col-md-6 search">
                    <a class="btn btn-success btn-lg pull-left order-header-button" href="/order"
                    role="button">заявка</a>
                    <form action="/chimneys/search" style="text-align: left">
                        <span style="display: inline-block; position: relative">
                            <input type="text" class="search_input">
                            <button type="submit" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="contacts">
                        <span><i class="fa fa-phone" aria-hidden="true"></i> (095) 57-57-677</span>
                        <span><i class="fa fa-phone" aria-hidden="true"></i> (097) 87-161-97</span>
                        <span><a href="/contact" style="color: #bbb"><i class="fa fa-envelope" aria-hidden="true"></i> i.i.babko@gmail.com</a></span>
                    </div>

                </div>
                <!--                <div class="col-sm-12 col-md-6">
                    <ul class="submenu">
                        <li><a href="/chimneys/одностенный">одностенные</a></li>
                        <li><a href="/chimneys/утепленный">утепленные</a></li>
                        <li><a href="/chimneys/алюком">алюком</a></li>
                        <li><a href="/chimneys/керамический">керамические</a></li>
                    </ul> 
                </div>
            </div>-->
            </div>
        </div>
</header>
