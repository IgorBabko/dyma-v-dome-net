@extends('layout')

@section('content')
    <section class="section-main" style="min-height: calc(100vh - 177px); padding: 0">
        <div class="container">
            <div class="row">
                <div class="feature-tab">
                    <div class="col-md-6">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="chimneys">
                                <img src="/images/chimneys.png" alt="" class="img-responsive">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="briquettes">
                                <img src="/images/briquettes.png" alt="" class="img-responsive">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="boilers">
                                <img src="/images/boilers.png" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="chimneys">
                                    <div class="col-sm-12 single-feature">
                                        <div class="col-sm-2 feature-icon">
                                            <i class="fa fa-laptop"></i>
                                        </div>
                                        <div class="col-sm-10 feature-content">
                                            <h4>Дымоходы</h4>
                                            <p>Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia
                                                deserunt mollit anim.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="briquettes" role="tab" data-toggle="tab">
                                    <div class="col-sm-12 single-feature">
                                        <div class="col-sm-2 feature-icon">
                                            <i class="fa fa-send"></i>
                                        </div>
                                        <div class="col-sm-10 feature-content">
                                            <h4>Брикеты</h4>
                                            <p>Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia
                                                deserunt mollit anim.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="boilers" role="tab" data-toggle="tab">
                                    <div class="col-sm-12 single-feature">
                                        <div class="col-sm-2 feature-icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="col-sm-10 feature-content">
                                            <h4>Утилизаторы</h4>
                                            <p>Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia
                                                deserunt mollit anim.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
