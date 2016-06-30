@extends ('admin.layout') @section ('content')
<div class="page">
    <div class="container">
        <div class="row">
            <h1>Редактировать брикет</h1>
            <div class="divider"></div>
            <div class="col-xs-12">
                @include ('partials.errors')
                <form action="/admin/briquettes/{{ $briquette->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $briquette->name }}"> 
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea type="text" class="form-control" id="description" name="description">{{ $briquette->description }}</textarea>
                    </div>
                    <!--<select class="form-control" name="type">
                        <option value="одностенный" {{ $briquette->type == 'одностенный' ? 'selected' :'' }}>одностенный</option>
                        <option value="утепленный" {{ $briquette->type == 'утепленный' ? 'selected' : '' }}>утепленный</option>
                        <option value="алюком" {{ $briquette->type == 'алюком' ? 'selected' : '' }}>алюком</option>
                        <option value="керамический" {{ $briquette->type == 'керамический' ? 'selected' : '' }}>керамический</option>
                    </select>-->
                    <div class="form-group" style="margin: 20px 0">
                        <label for="image">Изменить изображение</label>
                        <input type="file" id="image" name="image">
                        <img src="{{ $briquette->image }}" class="thumb">
                    </div>
                    <button type="submit" class="btn Button Button--green" style="float: right">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
