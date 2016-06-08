
<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
    <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="/admin/chimneys" class="">дымоходы</a> 
            </li>
            <li><a href="/" class="">вернуться на сайт</a></li>
            <!--<li class="{{ Request::is('admin/articles') ? 'active' : '' }}"><a href="/chimneys/articles" class="">статьи</a> 
            </li>
            <li class="{{ request::is('admin/prices') ? 'active' : '' }}"><a href="/chimneys/prices" class="active">цены</a> 
            </li>
            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/chimneys/gallery" class="">галерея</a> 
            </li>-->
    </ul>
</nav>
