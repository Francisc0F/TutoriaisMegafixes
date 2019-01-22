@extends('master')


@section('content')

    <div class="container bootstrap snippet mt-4" id="myacc">
        <div class="row">
            <div class="col-sm-3"><!--left col-->




                @if (session('message'))

                        <div  id="message">
                            <div id="inner-message" class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ session('message') }}
                            </div>
                        </div>

                @endif

                <div class="text-center" >
                    <img  class="photo mb-3" src="/storage/Fotos_utilizadores/{{$user->img_profile_utilizador}}" alt="avatar">
                    <div class="row">
                        <div class="col">

                            <a class="btn btn-lg btn-success apagar w-100" href="/utilizador/destroy/{{$user->id}}">Apagar Conta</a>

                        @if(Auth::User()->tipo_utilizador=="autor")
                                 <a class="btn btn-lg btn-success novo-tutorial w-100 mt-2 " href="/create">Novo tutorial</a>
                            @endif

                        </div>

                    </div>
                </div>
                <br>


                <div class="panel panel-default">

                    {{--<div class="panel-body">--}}
                        {{--<a href="http://bootnipets.com">meus tutoriais</a>--}}
                    {{--</div>--}}
                </div>

                <div class="accTutorials">
                    <ul class="list-group">
                        <li class="list-group-item text-muted">@if($tutoriais->count()==0){{"Sem Tutoriais"}}@else {{"Atividade"}}@endif</li>

                        @foreach ($tutoriais as $tutorial)

                            <li class="list-group-item ">
                                <div class="row">
                                    <div class="col text-center">
                                        <strong>
                                            {{$tutorial->titulo}}
                                        </strong>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center mt-1">
                                    @if(Auth::User()->tipo_utilizador=="autor")
                                    <a class="btn btn-lg btn-success edit-tutorial" href="/edit/{{$tutorial->id}}">Edit</a>
                                    @endif

                                       @if(Auth::User()->tipo_utilizador=="autor" or Auth::User()->tipo_utilizador=="admin")

                                    <a class="btn btn-lg btn-success apagar-tutorial ml-1" href="
                                            /delete/{{$tutorial->id}}">Apagar</a>
                                        @endif

                                    <a class="btn btn-lg btn-success ml-1"
                                       href="/show/{{$tutorial->id}}">Ver</a>
                                </div>

                            </li>
                        @endforeach

                    </ul>

                </div>


            </div><!--/col-3-->
            <div class="col-sm-9">

                <div>
                    <div class="tab-pane active" id="home">

                        <form class="form" action="/utilizador/update/{{$user->id}}" method="post" id="registrationForm" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" value="{{$user->name}}" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="pais"><h4>Pais</h4></label>
                                    <input type="pais" class="form-control" value="{{$user->pais_utilizador}}" name="pais" id="pais" placeholder="pais" >
                                </div>
                            </div><div class="form-group">

                                <div class="col-xs-6">
                                    <label for="cidade"><h4>Cidade</h4></label>
                                    <input type="cidade" class="form-control" value="{{$user->cidade_utilizador}}" name="cidade" id="cidade" placeholder="cidade" >
                                </div>
                            </div>

                            {{--<div class="form-group">--}}

                                {{--<div class="col-xs-6">--}}
                                    {{--<label for="password"><h4>Password</h4></label>--}}
                                    {{--<input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}

                                {{--<div class="col-xs-6">--}}
                                    {{--<label for="password2"><h4>Verify</h4></label>--}}
                                    {{--<input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <h6 class="mt-4">Mude a foto de Perfil</h6>
                                <!-- own style input -->
                                <input type="file" name="file" id="file-1" class="inputfile inputfile-1 hide" data-multiple-caption="{count} files selected" multiple="">
                                <label for="file-1">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="20" height="17" viewBox="0 0 20 17">
                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                        </path>
                                    </svg> <span>Choose a file…</span></label>

                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"> Save</button>
                                  <!--  <button class="btn btn-lg btn-success" type="reset">Reset</button>-->
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->


@endsection