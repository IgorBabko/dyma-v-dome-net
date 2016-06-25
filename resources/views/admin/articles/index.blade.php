@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <h1>Статьи</h1>
        <div class="divider"></div>
        <div class="row">
            @include ('partials.search-results', ['url' => 'admin/articles/search*'])
            <div class="col-xs-12">
                @include ('partials.flash')
            </div>
            <div class="col-xs-12" style="text-align: center; float: none">
                <a href="/admin/articles/create" style="margin-top: 20px" class="btn btn-primary">Добавить статью</a>
            </div>
        </div>
        <div class="row">
        @if (count($articles))
        @foreach ($articles as $article)
            <div class="col-xs-12 col-md-6">
                <div class="row article">
                    <div class="col-xs-12">
                        <a href="#">
                            <img class="img-responsive" src="{{ $article->image }}" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 static">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ $article->short_text }}</p>
                        <div class="buttons">
                            <a href="/admin/articles/{{ $article->id }}/edit" class="btn btn-info pull-right">Редактировать</a>
                            <form action="/admin/articles/{{ $article->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger pull-right" style="margin-right: 5px">Удалить</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @if (!Request::is('admin/articles/search*')) 
               {!! $articles->render() !!}
            @endif
        @endif
    </div>
</div>
@stop
