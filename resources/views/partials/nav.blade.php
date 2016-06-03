<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
        @if ( Request::is('/') )

        @elseif ( Request::is('chimneys*') )
            <li class=""><a href="/" class="">главная</a>
            </li>
            <li class=""><a href="/chimneys" class="">каталог</a> 
            </li>
            <li class=""><a href="/chimneys/articles" class="">статьи</a> 
            </li>
            <li class="active"><a href="/chimneys/prices" class="active">цены</a> 
            </li>
            <li class=""><a href="/chimneys/gallery" class="">галерея</a> 
            </li>
        @elseif ( Request::is('briquettes*') )

        @else

        @endif
    </ul>
</nav>
