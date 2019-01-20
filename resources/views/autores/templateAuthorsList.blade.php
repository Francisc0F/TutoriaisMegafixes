
@extends('master')


@section('content')
@if(Auth::user()->tipo_utilizador=="admin")

    <div id="ControllerAdmin" class="container mt-5"></div>


@else

    <div id="authors" class="container mt-4">


        <div class="list-group author-list">
            @foreach($autores as $autor )
            <div class="row d-flex justify-content-center mb-2">
                <div class="col-10">
                    <div  class="p-0 author-list-item m-0 list-group-item list-group-item-action flex-column align-items-start position-relative">

                        <div class="row m-0">

                            <div class="col-12 pb-0 px-2">

                                <div class="row">
                                    <div class="col">
                                        <h5 class="mt-2" style="line-height: 27px;">{{$autor->name}}</h5>
                                   </div>

                                    <div class="col">
                                        <div class="row">
                                            <div class="col my-1">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            @if(Auth::check())
                                                            @if(Auth::user()->tipo_utilizador=="admin")
                                                            <a href="/edit/{id}" class="btn btn-success" style="color:white;">Apagar</a>
                                                            <a href="/edit/{id}" class="btn btn-success" style="color:white;">Editar</a>
                                                            @endif

                                                            @endif
                                                            <a href="/utilizador/tutoriaisList/{{$autor->id}}" class="btn btn-success" style="color:white;">Tutoriais</a>
                                                        </div>
                                                        <div>
                                                            <small style="line-height: 35px">{{$autor->total_views}} <i class="fas fa-eye"></i></small>
                                                            <small style="line-height: 35px">{{$autor->num_tutoriais}} <i class="fab fa-leanpub"></i> </small>

                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>

                    </div>


                </div>
            </div>

            @endforeach
        </div>
        <div class="row d-flex justify-content-center">


            {{ $autores->links() }}

        </div>
    </div>

@endif

@endsection
