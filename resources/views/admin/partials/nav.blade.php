<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('admin') || Request::is('admin/chimneys*') ? 'active' : '' }}"><a href="/admin/chimneys" class="">дымоходы</a></li>
            <li class="{{ Request::is('admin/briquettes*') ? 'active' : '' }}"><a href="/admin/briquettes" class="">брикеты</a></li>
            <li class="{{ Request::is('admin/boilers*') ? 'active' : '' }}"><a href="/admin/boilers" class="">котлы</a></li>
            <li class="{{ Request::is('admin/articles*') ? 'active' : '' }}"><a href="/admin/articles" class="">статьи</a></li>
            <li class="{{ Request::is('admin/photos*') ? 'active' : '' }}"><a href="/admin/photos" class="">фото</a></li>
            <li class="{{ Request::is('admin/orders*') ? 'active' : '' }}"><a href="/admin/orders" class="">заявки</a></li>
            <li><a href="/">вернуться на сайт</a></li>
            <li><a href="/admin/logout">Выйти</a></li>
    </ul>
</nav>
