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
        </div>
        @include ('admin.partials.nav')
</div>
    <div class="top-line" id="chimneys">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    @if ( Request::is('admin/chimneys*') )
                        @include ('partials.search', ['action' => '/admin/chimneys/search'])
                    @elseif ( Request::is('admin/articles*'))
                        @include ('partials.search', ['action' => '/admin/articles/search'])
                    @elseif ( Request::is('admin/photos*'))
                        @include ('partials.search', ['action' => '/admin/photos/search'])
                    @elseif ( Request::is('admin/orders*'))
                        @include ('partials.search', ['action' => '/admin/orders/search'])
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
