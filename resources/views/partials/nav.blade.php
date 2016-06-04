<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
        @if ( Request::is('chimneys*') )
            <li><a href="/" class="">главная</a>
            </li>
            <li class="{{ Request::is('chimneys*') ? 'active' : '' }}"><a href="/chimneys" class="">каталог</a> 
            </li>
            <li class="{{ Request::is('articles') ? 'active' : '' }}"><a href="/chimneys/articles" class="">статьи</a> 
            </li>
            <li class="{{ Request::is('prices') ? 'active' : '' }}"><a href="/chimneys/prices" class="active">цены</a> 
            </li>
            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/chimneys/gallery" class="">галерея</a> 
            </li>
        @elseif ( Request::is('briquettes*') )

        @else

        @endif
    </ul>
</nav>
