<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
            <li><a href="/" class="">главная</a>
            </li>
            @if ( Session::get('type') == 'chimneys' )
            <li class="{{ Request::is('chimneys') ? 'active' : '' }}"><a href="/chimneys" class="">дымоходы</a> 
            </li>
            <li class="{{ Request::is('chimneys/*') && !Request::is('chimneys/prices') ? 'active' : '' }}"><a href="/chimneys/catalog" class="">каталог</a>
            </li>
            <li class="{{ Request::is('chimneys/prices') ? 'active' : '' }}"><a href="/chimneys/prices" class="">цены</a> 
            </li>
            @elseif ( Session::get('type') == 'briquettes' )
            <li class="{{ Request::is('briquettes') ? 'active' : '' }}"><a href="/briquettes" class="">брикеты</a> 
            </li>
            <li class="{{ Request::is('briquettes/*') && !Request::is('briquettes/prices') ? 'active' : '' }}"><a href="/briquettes/catalog" class="">каталог</a> 
            </li>
            <li class="{{ Request::is('briquettes/prices') ? 'active' : '' }}"><a href="/briquettes/prices" class="">цены</a> 
            </li>
            @else
            <li class="{{ Request::is('boilers') ? 'active' : '' }}"><a href="/boilers" class="">котлы</a> 
            </li>
            <li class="{{ Request::is('boilers/*') && !Request::is('boilers/prices') ? 'active' : '' }}"><a href="/boilers/catalog" class="">каталог</a> 
            </li>
            <li class="{{ Request::is('boilers/prices') ? 'active' : '' }}"><a href="/boilers/prices" class="">цены</a> 
            </li>
            @endif
            <li class="{{ Request::is('articles*') ? 'active' : '' }}"><a href="/articles" class="">статьи</a> 
            </li>
            <li class="{{ Request::is('photos*') ? 'active' : '' }}"><a href="/photos" class="">фото</a> 
            </li>
    </ul>
</nav>
