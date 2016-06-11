@extends('layout') @section('content')

<div class="page">
    <div class="container">
        <h1>Одностенные дымоходы</h1>
        <div class="divider"></div>
        <div class="row">
            @foreach($chimneys as $chimney)
            <div class="chimney">
                <div class="col-md-3">
                    @if ( $chimney->image )
                        <img class="img-responsive item-img" src="{{ $chimney->image }}" alt="picture">
                    @endif
                </div>
                <div class="col-md-9">
                    <h3>{{ $chimney->name }}</h3>
                    <h4>Описание</h4> 
                    <p class="description">{{ $chimney->description }}</p>
                    <h4>Толщина: </h4>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked">0.5мм AISI 304
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">0.8мм AISI 304
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">1мм AISI 321
                    </label>
                    <h4>Тип</h4>
                    <p class="description">{{ $chimney->type }}</p>
                </div>
                <div class="col-xs-12 col-md-9 col-md-offset-3">
                    <h4>Цены</h4>
                    <div class="table-block">
                        <table class="table table-bordered">
                            <thead style="font-weight: bold">
                                <tr>
                                    <td>Димаметр</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                    <td>100/160</td> 
                                </tr>
                            </thead>
                            <tr>
                                <td>Труба</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                            </tr>
                            <tr>
                                <td>Труба</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                            </tr>
                            <tr>
                                <td>Труба</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                                <td>234</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12">
                    <a href="#" class="btn btn-primary pull-right">Подробнее</a>
                </div>
            </div>
            @endforeach
        </div>
        {{ $chimneys->render() }}
    </div>
</div>
@stop
