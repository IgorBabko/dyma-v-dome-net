@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <h1>Фотографии</h1>
        <div class="divider"></div>
        <div class="row">
            <div class="col-xs-12">
                @include ('partials.flash')
            </div>
            <div class="col-xs-12" style="text-align: center; float: none">
                <a href="/admin/photos/create" class="btn btn-primary">Добавить фото</a>
            </div>
        </div>

        <div class="row">

            @foreach ($photos as $photo)
            <div class="col-md-3 col-xs-6 thumb photo">
                <h4 style="text-align: center">{{ $photo->title }}</h4>
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="{{ $photo->image }}" alt="">
                </a>
                <div class="buttons-centered">
                    <a href="/admin/photos/{{ $photo->id }}/edit" class="btn btn-info pull-right">Изменить</a>
                    <form action="/admin/photos/{{ $photo->id }}" method="POST" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger pull-right" style="margin-right: 5px">Удалить</a>
                    </form>
                </div>
            </div>
            @endforeach

        </div>
        {!! $photos->render() !!}
    </div>
</div>
@stop
