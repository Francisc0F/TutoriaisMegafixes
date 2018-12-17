<!-- includes sempre primeiro
 todos os includes necessarios pra start page -->
@extends('master')
@extends('templates.header')
@extends('templates.footer')
@extends('templates.templateLoginRegist')

<!-- page title -->
@section("title")
    start
@endsection

<!--  dynamic main content -->
@section('content')
    <div class="container mt-3">
        <div class="text-center jumbotron">
            <h1>WOW,bueda Cool!</h1>
            <p class="lead">Anda escrever tutoriais para nos!</p>
            <p><a class="btn btn-lg btn-success btn-login-signIn" href="#" >Sign in</a></p>
        </div>

        <!-- -->
        <div class="row">
            <div class="col-md-4">
                <div class="list-group" >
                    <a href="#" class="recent-item list-group-item list-group-item-action flex-column align-items-start position-relative">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>

                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Programacao</small>


                        <div class="group mt-2 d-flex justify-content-around ">

                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>


                            <span class="text-warning dificulty">Intermediate</span>

                        </div>
                        <div class="autor d-flex justify-content-center">

                            <small class="bg-dark px-2">Dimitri Tripalovski</small>


                        </div>


                    </a>
                    <a href="#" class="recent-item list-group-item list-group-item-action flex-column align-items-start position-relative">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>

                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Programacao</small>


                        <div class="group mt-2 d-flex justify-content-around ">

                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>


                            <span class="text-warning dificulty">Intermediate</span>

                        </div>
                        <div class="autor d-flex justify-content-center">

                            <small class="bg-dark px-2">Dimitri Tripalovski</small>


                        </div>


                    </a>
                    <a href="#" class="recent-item list-group-item list-group-item-action flex-column align-items-start position-relative">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>

                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Programacao</small>


                        <div class="group mt-2 d-flex justify-content-around ">

                            <div class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>


                            <span class="text-warning dificulty">Intermediate</span>

                        </div>
                        <div class="autor d-flex justify-content-center">

                            <small class="bg-dark px-2">Dimitri Tripalovski</small>


                        </div>


                    </a>
                </div>

            </div>

            <div class="col-md-8">

                <div class="list-group mostviewed">

                    <a href="#" class="mostviewed-item m-0 list-group-item list-group-item-action flex-column align-items-start position-relative">

                        <div class="row m-0">
                            <div class="col-md-2 px-0 position-relative m-0">
                                <div class="tutorialImage m-0" >
                                    <img src="https://picsum.photos/500" width="100%">

                                </div>
                            </div>
                            <div class="col-md-10 pb-0 px-2">

                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mt-1">List group item heading</h5>
                                    <small class="mt-1">30123 views</small>
                                </div>
                                <p class="mb-0">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="mb-2">Programacao @ Alex Sienfield</small>



                            </div>

                        </div>




                    </a>
                    <a href="#" class="mostviewed-item m-0 list-group-item list-group-item-action flex-column align-items-start position-relative">

                        <div class="row m-0">
                            <div class="col-md-2 px-0 position-relative">
                                <div class="tutorialImage">
                                    <img src="https://picsum.photos/450" width="100%">

                                </div>
                            </div>
                            <div class="col-md-10 pb-0 px-2">

                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mt-1">List group item heading</h5>
                                    <small class="mt-1">30123 views</small>
                                </div>
                                <p class="mb-0">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="mb-2">Programacao @ Alex Sienfield</small>



                            </div>

                        </div>




                    </a>
                    <a href="#" class="mostviewed-item m-0 list-group-item list-group-item-action flex-column align-items-start position-relative">

                        <div class="row m-0">
                            <div class="col-md-2 px-0 position-relative">
                                <div class="tutorialImage">
                                    <img src="https://picsum.photos/400" width="100%">

                                </div>
                            </div>
                            <div class="col-md-10 pb-0 px-2">

                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mt-1">List group item heading</h5>
                                    <small class="mt-1">30123 views</small>
                                </div>
                                <p class="mb-0">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="mb-2">Programacao @ Alex Sienfield</small>



                            </div>

                        </div>




                    </a>
                    <a href="#" class="mostviewed-item m-0 list-group-item list-group-item-action flex-column align-items-start position-relative">

                        <div class="row m-0">
                            <div class="col-md-2 px-0 position-relative">
                                <div class="tutorialImage">
                                    <img src="https://picsum.photos/300" width="100%">

                                </div>
                            </div>
                            <div class="col-md-10 pb-0 px-2">

                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mt-1">List group item heading</h5>
                                    <small class="mt-1">30123 views</small>
                                </div>
                                <p class="mb-0">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="mb-2">Programacao @ Alex Sienfield</small>



                            </div>

                        </div>




                    </a>

                </div>


            </div>


        </div>


        <div id="topAutors">
            <div class="row pt-4">
                <div class="col-md-4 py-1">

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center active">
                        Cras justo odio
                        <span class="badge badge-gold badge-pill">Most Viewed Autor</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <span class="badge badge-silver badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <span class="badge badge-bronze badge-pill">3</span>
                    </li>

                </ul>
            </div>

            <div class="col-md-8  ">
                <!-- top 3 profiles-->
                <div class="profile d-flex justify-content-start bg-light">
                    <div class="d-flex justify-content-start">
                        <div class="imageOverflow">
                            <img src="https://picsum.photos/700" width="100%" >
                        </div>
                        <div class="details ml-4 pt-3">
                            <blockquote>
                                <h5>Lourenco Matias Malaquias</h5>
                                <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
                            </blockquote>
                            <p class="mb-1">
                                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.

                            </p>

                        </div>

                        <div class="profile-items">


                        </div>

                    </div>
                </div>
                <div class="profile d-flex justify-content-start bg-light hide">
                    <div class="d-flex justify-content-start">
                        <div class="imageOverflow">
                            <img src="https://picsum.photos/300" width="100%" >
                        </div>
                        <div class="details ml-4 pt-3">
                            <blockquote>
                                <h5>Otavio Torreto</h5>
                                <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
                            </blockquote>
                            <p class="mb-1">
                                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.

                            </p>

                        </div>

                        <div class="profile-items">


                        </div>

                    </div>
                </div>
                <div class="profile d-flex justify-content-start bg-light hide">
                    <div class="d-flex justify-content-start">
                        <div class="imageOverflow">
                            <img src="https://picsum.photos/200" width="100%" >
                        </div>
                        <div class="details ml-4 pt-3">
                            <blockquote>
                                <h5>
                                    Oliver tomilho</h5>
                                <small><cite title="Source Title">Chicago, United States of America  <i class="icon-map-marker"></i></cite></small>
                            </blockquote>
                            <p class="mb-1">
                                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.

                            </p>

                        </div>

                        <div class="profile-items">


                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>
@endsection



<!-- footer -->

