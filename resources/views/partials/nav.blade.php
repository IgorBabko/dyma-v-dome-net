<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
            <li><a href="/" class="">главная</a>
            </li>
            @if ( Session::get('type') == 'chimneys' )
            <li class="{{ Request::is('chimneys') ? 'active' : '' }}"><a href="/chimneys" class="">дымоходы</a> 
            </li>
            <li class="{{ Request::is('chimneys/*') ? 'active' : '' }}"><a href="/chimneys/catalog" class="">каталог</a> 
            </li>
            @elseif (Request::is('briquettes*'))
            <li class="{{ Request::is('briquettes') ? 'active' : '' }}"><a href="/briquettes" class="">брикеты</a> 
            </li>
            <li class="{{ Request::is('briquettes/catalog') ? 'active' : '' }}"><a href="/chimneys/catalog" class="">каталог</a> 
            </li>
            @else
            <li class="{{ Request::is('boilers') ? 'active' : '' }}"><a href="/boilers" class="">котлы</a> 
            </li>
            <li class="{{ Request::is('boilers/catalog') ? 'active' : '' }}"><a href="/boilers/catalog" class="">каталог</a> 
            </li>
            @endif
            <li class="{{ Request::is('articles*') ? 'active' : '' }}"><a href="/articles" class="">статьи</a> 
            </li>
            <li class="{{ Request::is('prices*') ? 'active' : '' }}"><a href="/chimneys/prices" class="active">цены</a> 
            </li>
            <li class="{{ Request::is('photos*') ? 'active' : '' }}"><a href="/photos" class="">фото</a> 
            </li>
    </ul>
</nav>
