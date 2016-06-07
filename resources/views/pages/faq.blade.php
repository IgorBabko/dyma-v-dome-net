@extends('content_wrapper') @section('content')
<section>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <img src="/images/question_mark.png">
            </div>
            <div class="contact_full">
                <div class="col-md-9">
                    <div class="left_contact right">
                        <form action="role">
                            <div class="form-level">
                                <input name="title" placeholder="Суть Вашего вопроса" value="" type="text" class="input-block">
                                <!--<span class="form-icon fa fa-user"></span>-->
                            </div>
                            <div class="form-level">
                                <textarea name="" id="messege" rows="5" class="textarea-block" placeholder="Задайте вопросо здесь"></textarea>
                                <span class="form-icon fa fa-pencil"></span>
                            </div>
                            <div class="col-sm-12 text-center" style="padding-right: 0">
                                <button class="btn btn-main featured pull-right">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3>Project One</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                    veniam exercitationem expedita laborum at voluptate. Labore,
                    voluptates totam at aut nemo deserunt rem magni pariatur quos
                    perspiciatis atque eveniet unde.</p>
                <a class="btn Button" href="#">Перейти к обсуждению<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-sm-12">
                <h3>Project Two</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit
                    velit cumque vero doloremque repellendus distinctio maiores
                    rem expedita a nam vitae modi quidem similique ducimus! Velit,
                    esse totam tempore.</p>
                <a class="btn Button" href="#">Перейти к обсуждению<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <h3>Project Three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
                    temporibus, dolores, at, praesentium ut unde repudiandae voluptatum
                    sit ab debitis suscipit fugiat natus velit excepturi amet commodi
                    deleniti alias possimus!</p>
                <a class="btn Button" href="#">Перейти к обсуждению<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h3>Project Four</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo,
                    quidem, consectetur, officia rem officiis illum aliquam perspiciatis
                    aspernatur quod modi hic nemo qui soluta aut eius fugit quam
                    in suscipit?</p>
                <a class="btn Button" href="#">Перейти к обсуждению<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h3>Project Five</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid,
                    quo, minima, inventore voluptatum saepe quos nostrum provident
                    ex quisquam hic odio repellendus atque porro distinctio quae
                    id laboriosam facilis dolorum.</p>
                <a class="btn Button" href="#">Перейти к обсуждению<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
</section>
@stop
