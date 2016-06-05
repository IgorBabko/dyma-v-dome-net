@extends('layout') @section('content')

<div class="page">
    <div class="container">
        <h1>Одностенные дымоходы</h1>
        <div class="divider"></div>

        <div class="row">
            @foreach($chimneys as $chimney)
            <div class="chimney">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-5 flex-block">
                    <h3>{{ $chimney->name }}</h3>
                    <p>{{ $chimney->description }}</p>
                    <!--<a class="btn button" href="#">view project <span class="glyphicon glyphicon-chevron-right"></span></a>-->
                    <h5>Толщина: </h5>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">0.5мм
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">0.8мм
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">1мм
                    </label>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop
