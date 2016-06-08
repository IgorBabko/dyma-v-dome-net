<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('partials.head')
    </head>
    <body>
        @if ( ! Request::is('/') )
            @include ('admin.partials.header')
        @endif
        @yield ('content')
        @include ('partials.scripts')
    </body>
</html>
