<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
            <li><a href="/" class="">главная</a>
            </li>
            <li class="{{ Request::is('chimneys') ? 'active' : '' }}"><a href="/chimneys" class="">о нас</a> 
            </li>
            <li class="{{ Request::is('chimneys/catalog') ? 'active' : '' }}"><a href="/chimneys/catalog" class="">каталог</a> 
            </li>
            <li class="{{ Request::is('articles') ? 'active' : '' }}"><a href="/chimneys/articles" class="">статьи</a> 
            </li>
            <li class="{{ Request::is('prices') ? 'active' : '' }}"><a href="/chimneys/prices" class="active">цены</a> 
            </li>
            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/chimneys/gallery" class="">галерея</a> 
            </li>
    </ul>
</nav>
