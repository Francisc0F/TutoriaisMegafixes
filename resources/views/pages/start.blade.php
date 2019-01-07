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

                    @for ($i = 0; $i < $Recent->count(); $i++)
                    <a href="#" class="recent-item p-3 list-group-item list-group-item-action flex-column align-items-start position-relative">
                        <div class="w-100">
                            <h5 class="mb-1">{{$Recent[$i]->titulo}}</h5>
                            <small class="position-absolute timestamp p-2"><i class="fas fa-clock"></i>{{$Recent[$i]->created_at->format('H:i')}}</small>
                        </div>
                        <p class="mb-1">{{$Recent[$i]->descricao}}</p>
                        <small>{{$Recent[$i]->categoria["nome_categoria"]}}</small>


                        <div class="group mt-2 d-flex justify-content-around ">

                            <div class="rate d-flex justify-content-around {{$Recent[$i]->rating}}">
                                @for ($j = 0; $j <5 ; $j++)
                                    <span class="fa fa-star @if($Recent[$i]->rating>=($j+1))checked @endif pl-1"></span>
                                @endfor
                            </div>

                        @switch($Recent[$i]->dificuldade)

                          @case(1)
                                <span class="text-success dificulty">Beginner</span>
                                @break
                          @case(2)
                                <span class="text-warning dificulty">Intermediate</span>
                                @break
                          @case(3)
                                <span class="text-danger dificulty">Advanced</span>
                                @break


                        @endswitch

                        </div>
                        <div class="autor d-flex justify-content-center">

                            <small class="bg-dark px-2">{{$Recent[$i]->utilizador["nome_utilizador"]}}</small>


                        </div>


                    </a>
                    @endfor
                </div>

            </div>

            <div class="col-md-8">

                <div class="list-group mostviewed">


                    @for ($i = 0; $i < $Mostwatch->count(); $i++)

                        <a href="#" class="mostviewed-item list-group-item list-group-item-action flex-column align-items-start position-relative">

                            <div class="row m-0">
                                <div class="col-md-2 px-0 position-relative m-0">
                                    <div class="tutorialImage m-0" >
                                        <img src="https://picsum.photos/500" width="100%">

                                    </div>
                                </div>
                                <div class="col-md-10 px-2">

                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mt-1">{{$Mostwatch[$i]->titulo}}</h5>
                                        <small class="mt-1"><i class="fas fa-eye"></i> {{$Mostwatch[$i]->num_views}}</small>
                                    </div>
                                    <p class="mb-0">{{$Mostwatch[$i]->descricao}}</p>
                                    <small class="mb-2 categoria-user">{{$Mostwatch[$i]->categoria["nome_categoria"]}} @ {{$Mostwatch[$i]->utilizador["nome_utilizador"]}}</small>



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

                        @for ($i = 0; $i <$usersTopWatched->count(); $i++)
                            <li class="list-group-item d-flex justify-content-between align-items-center
                              @if ($i==0)
                                {{"active"}}
                             @endif
                                    ">
                               {{$usersTopWatched[$i]->id_utilizador}}
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

