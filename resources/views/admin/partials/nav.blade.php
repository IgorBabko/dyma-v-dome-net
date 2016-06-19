<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('admin/chimneys*') ? 'active' : '' }}"><a href="/admin/chimneys" class="">дымоходы</a></li>
            <li class="{{ Request::is('admin/articles*') ? 'active' : '' }}"><a href="/admin/articles" class="">статьи</a></li>
            <li class="{{ Request::is('admin/photos*') ? 'active' : '' }}"><a href="/admin/photos" class="">фото</a></li>
            <li class="{{ Request::is('admin/orders*') ? 'active' : '' }}"><a href="/admin/orders" class="">заявки</a></li>
            <li><a href="/" class="">вернуться на сайт</a></li>
            <li><a href="/admin/logout" class="">Выйти</a></li>
            <!--<li class="{{ Request::is('admin/articles') ? 'active' : '' }}"><a href="/chimneys/articles" class="">статьи</a> 
            </li>
            <li class="{{ request::is('admin/prices') ? 'active' : '' }}"><a href="/chimneys/prices" class="active">цены</a> 
            </li>
            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/chimneys/gallery" class="">галерея</a> 
            </li>-->
    </ul>
</nav>
