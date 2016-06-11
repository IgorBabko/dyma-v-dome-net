@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Редактировать дымоход</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/chimneys/{{ $chimney->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $chimney->name }}"> 
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea type="text" class="form-control" id="description" name="description">{{ $chimney->description }}</textarea>
                    </div>
                    <select class="form-control" name="type">
                        <option value="one-wall" {{ $chimney->type == 'one-wall' ? 'selected' :'' }}>одностенный</option>
                        <option value="warmed" {{ $chimney->type == 'warmed' ? 'selected' : '' }}>утепленный</option>
                        <option value="alyukom" {{ $chimney->type == 'alyukom' ? 'selected' : '' }}>алюком</option>
                        <option value="ceramic" {{ $chimney->type == 'ceramic' ? 'selected' : '' }}>керамический</option>
                    </select>
                    <div class="form-group" style="margin: 20px 0">
                        <img src="{{ $chimney->img }}">
                        <label for="image">Изменить изображение</label>
                        <input type="file" id="image" name="img">
                    </div>
                    <button type="submit" class="btn btn-success" style="float: right">Редактировать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
