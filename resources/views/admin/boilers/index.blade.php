@extends ('admin.layout')

@section ('content')
<div class="page">
    <div class="container">
        <h1>{{ Request::input('queryString') ? 'Результаты поиска' : 'Каталог котлов' }}</h1>
        <div class="divider"></div>
        <div class="row">
            @if ( Request::is('admin/boilers/search*') )
                @include ('partials.search-results', ['returnUrl' => '/admin/boilers'])
            @endif
            <div class="col-xs-12">
                @include ('partials.flash')
            </div>
            <div class="col-xs-12" style="text-align: center; float: none">
                <a href="/admin/boilers/create" style="margin-top: 20px" class="btn Button Button__add-resource Button--green">Добавить котел</a>
            </div>
            @if (count($boilers))
                @foreach ($boilers as $boiler)
                <div class="boiler">
                    <div class="col-md-3">
                        @if ( $boiler->image )
                            <img class="img-responsive item-img" src="{{ $boiler->image }}" alt="picture">
                        @endif
                    </div>
                    <div class="col-md-9">
                        <h3>{{ $boiler->name }}</h3>
                        <h4>Описание</h4> 
                        <p class="description">{{ $boiler->description }}</p>
                        <!--<h4>Толщина: </h4>
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
                        <p class="description">{{ $boiler->type }}</p>-->
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
                        <a href="/admin/boilers/{{ $boiler->id }}/edit" class="btn Button Button--blue pull-right">Редактировать</a>
                        <form action="/admin/boilers/{{ $boiler->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn Button pull-right" style="margin-right: 5px">Удалить</a>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="pagination-wrapper">
            @if (!Request::is('admin/boilers/search*')) 
               {!! $boilers->render() !!}
            @endif
            </div>
        @endif
    </div>
</div>
@stop
