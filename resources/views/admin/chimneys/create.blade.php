@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Добавить дымоход</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/chimneys" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="desc">Описание</label>
                        <textarea type="text" class="form-control" id="desc" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea type="text" class="form-control" id="content" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <select class="form-control" id="type" name="type">
                            <option value="одностенный" selected>одностенный</option>
                            <option value="утепленный">утепленный</option>
                            <option value="алюком">алюком</option>
                            <option value="керамический">керамический</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 20px 0">
                        <label for="image">Добавить изображение</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn Button Button--green" style="float: right">Добавить</button>
                    <a href="/admin/chimneys" type="submit" class="btn Button Button--blue right-margin">Назад <span class="glyphicon glyphicon-chevron-left"></span></a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
