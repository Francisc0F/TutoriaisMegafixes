<!-- includes sempre primeiro
 todos os includes necessarios pra start page -->
@extends('master')

<!-- page title -->
@section("title", "sou um titulo")


<!--  dynamic main content -->
@section('content')

    <div class="container my-3">
        <div class="text-center jumbotron">
            <h1>WOW,bueda Cool!</h1>
            <p class="lead">Anda escrever tutoriais para nos!</p>
            <p><a class="btn btn-lg btn-success btn-login-signIn" href="#" >Sign in</a></p>
        </div>

        <!-- -->
        <div class="row">
            <div class="col-md-4">
                <div class="list-group" >

                    @for ($i = 0; $i <3; $i++)
                    <a href="#" class="recent-item list-group-item list-group-item-action flex-column align-items-start position-relative">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small><i class="fas fa-clock"></i>  3 days </small>

                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Programacao</small>


                        <div class="group mt-2 d-flex justify-content-around ">

                            <div class="rate d-flex justify-content-around">
                                <span class="fa fa-star checked pl-1"></span>
                                <span class="fa fa-star checked pl-1"></span>
                                <span class="fa fa-star checked pl-1"></span>
                                <span class="fa fa-star pl-1" ></span>
                                <span class="fa fa-star pl-1"></span>
                            </div>


                        <span class="text-warning dificulty">Intermediate</span>

                        </div>
                        <div class="autor d-flex justify-content-center">

                            <small class="bg-dark px-2">Dimitri Tripalovski</small>


                        </div>


                    </a>
                    @endfor
                </div>

            </div>

            <div class="col-md-8">

                <div class="list-group mostviewed">
                    @for ($i = 0; $i < 4; $i++)

                        <a href="#" class="mostviewed-item list-group-item list-group-item-action flex-column align-items-start position-relative">

                            <div class="row m-0">
                                <div class="col-md-2 px-0 position-relative m-0">
                                    <div class="tutorialImage m-0" >
                                        <img src="https://picsum.photos/500" width="100%">

                                    </div>
                                </div>
                                <div class="col-md-10 px-2">

                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mt-1">List group item heading</h5>
                                        <small class="mt-1"><i class="fas fa-eye"></i> 30123 </small>
                                    </div>
                                    <p class="mb-0">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="mb-2">Programacao @ Alex Sienfield</small>



                                </div>

                            </div>




                        </a>


                    @endfor
                </div>


            </div>


        </div>


        <div id="topAutors">
            <div class="row pt-4">
                <div class="col-md-4 py-1">

                    <ul class="list-group">

                        @for ($i = 0; $i <$users->count(); $i++)
                            <li class="list-group-item d-flex justify-content-between align-items-center
                              @if ($i==0)
                                {{"active"}}
                             @endif
                                    ">
                                {{$users[$i]->nome_utilizador}}
                                <span class="badge
                                @switch($i)
                                @case(0)
                                {{"badge-gold"}}
                                @break
                                @case(1)
                                {{"badge-silver"}}
                                @break
                                @case(2)
                                {{"badge-bronze"}}
                                @break
                                @endswitch
                                        badge-pill">

                                @if($i==0){{"Most Viewed Autor"}}

                                    @else {{$i+1}}



                                    @endif</span>


                            </li>
                        @endfor

                    </ul>
                </div>

                <div class="col-md-8  ">

                    <!-- top 3 profiles-->
                    @for ($i = 0; $i <$users->count(); $i++)

                        <div class="profile d-flex justify-content-start bg-light hide">
                            <div class="d-flex justify-content-start">
                                <div class="imageOverflow">
                                    <img src="/storage/Fotos_utilizadores{{$users[$i]->img_profile_utilizador}}" width="100%" >
                                </div>
                                <div class="details ml-4 pt-3">
                                    <blockquote>
                                        <h5>{{$users[$i]->nome_utilizador}}</h5>
                                        <small><cite title="Source Title">{{$users[$i]->cidade_utilizador}}, {{$users[$i]->pais_utilizador}}  <i class="icon-map-marker"></i></cite></small>
                                    </blockquote>
                                    <p class="mb-1">
                                        <i class="fas fa-eye"></i> 21031
                                        <i class="fab fa-leanpub"></i> 230
                                    </p>

                                </div>



                            </div>
                        </div>

                    @endfor
                </div>

            </div>

        </div>

    </div>

@endsection



<!-- footer -->

