@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Добавить статью</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/articles" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Короткое описание</label>
                        <textarea type="text" class="form-control" id="short_text" name="short_text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Текст</label>
                        <textarea type="text" class="form-control" id="text" name="text"></textarea>
                    </div>
                    <div class="form-group" style="margin: 20px 0">
                        <label for="image">Добавить изображение</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-success" style="float: right">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
