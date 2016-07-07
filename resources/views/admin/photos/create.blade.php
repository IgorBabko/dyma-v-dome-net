@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Добавить фотографию</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/photos" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="desc">Описание</label>
                        <textarea type="text" class="form-control" id="desc" name="desc"></textarea>
                    </div>
                    <!--<div class="form-group" style="margin: 20px 0">
                        <label for="image">Добавить изображение</label>
                        <input type="file" id="image" name="image">
                    </div>-->
                    <div class="form-group">
                        <label for="image">Главная картинка</label>
                        <input type="text" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn Button Button--green" style="float: right">Добавить</button>
                    <a href="/admin/photos" type="submit" class="btn Button Button--blue right-margin">Назад <span class="glyphicon glyphicon-chevron-left"></span></a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
