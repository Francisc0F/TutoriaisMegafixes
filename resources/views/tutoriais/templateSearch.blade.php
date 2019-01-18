

@extends('master')

<!-- page title -->
@section("title", "sou um titulo")


<!--  dynamic main content -->
@section('content')


    <div class="container my-3">
        <!-- -->
        <div class="row">

            <div class="col-md-8">
                @if($tutoriais->count()>0)
                <div class="list-group mostviewed">



                    @for ($i = 0; $i < $tutoriais->count(); $i++)

                        <a href="/show/{{$tutoriais[$i]->id}}" class="mostviewed-item list-group-item list-group-item-action flex-column align-items-start position-relative">

                            <div class="row m-0">
                                <div class="col-md-2 px-0 position-relative m-0">
                                    <div class="tutorialImage m-0" >
                                        <img src="/storage/Tutoriais_img_capa/{{$tutoriais[$i]->img_capa}}" style="margin-left: -46px;max-height: 117px; " width="200px">
                                    </div>
                                </div>
                                <div class="col-md-10 px-2 position-relative">

                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mt-1">{{$tutoriais[$i]->titulo}}</h5>
                                        <small class="mt-1"><i class="fas fa-eye"></i> {{$tutoriais[$i]->num_views}}</small>
                                    </div>
                                    <p class="mb-0">{{$tutoriais[$i]->descricao}}</p>
                                    <small class="mb-1 categoria-user">{{$tutoriais[$i]->categoria["nome_categoria"]}} @ {{$tutoriais[$i]->utilizador["name"]}}</small>



                                </div>

                            </div>




                        </a>

                    @endfor
                </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Nenhum resultado Encontrado! :(

                    </div>
                @endif
                    <a class="btn btn-lg btn-success mt-2" href="/">Voltar a pagina inicial</a>
            </div>


        </div>



    </div>

@endsection


