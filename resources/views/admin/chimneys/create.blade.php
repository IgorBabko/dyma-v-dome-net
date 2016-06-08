@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Добавить дымоход</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                <form>
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea type="text" class="form-control" id="description" name="description"></textarea>
                    </div>
                    <select class="form-control" name="type">
                        <option value="one-wall">одностенный</option>
                        <option value="warmed">утепленный</option>
                        <option value="alyukom">алюком</option>
                        <option value="ceramic">керамический</option>
                    </select>
                    <div class="form-group" style="margin: 20px 0">
                        <label for="image">Добавить изображение</label>
                        <input type="file" id="image" name="img">
                    </div>
                    <button type="submit" class="btn btn-success" style="float: right">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
