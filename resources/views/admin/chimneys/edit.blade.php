@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Редактировать дымоход</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/chimneys/{{ $chimney->id }}" method="POST" enctype="multipart/form-data">
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
                        <option value="одностенный" {{ $chimney->type == 'одностенный' ? 'selected' :'' }}>одностенный</option>
                        <option value="утепленный" {{ $chimney->type == 'утепленный' ? 'selected' : '' }}>утепленный</option>
                        <option value="алюком" {{ $chimney->type == 'алюком' ? 'selected' : '' }}>алюком</option>
                        <option value="керамический" {{ $chimney->type == 'керамический' ? 'selected' : '' }}>керамический</option>
                    </select>
                    <div class="form-group" style="margin: 20px 0">
                        <label for="image">Изменить изображение</label>
                        <input type="file" id="image" name="image">
                        <img src="{{ $chimney->image }}" class="thumb">
                    </div>
                    <button type="submit" class="btn btn-success" style="float: right">Редактировать</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
