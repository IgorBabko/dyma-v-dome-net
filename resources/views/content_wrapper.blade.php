@extends ('layout')

@section ('content_wrapper')
    @if ( ! Request::is('/') )
        @include ('partials.header')
    @endif
    @yield ('content')
    @include ('partials.footer')
    @include ('partials.scripts')
@stop
