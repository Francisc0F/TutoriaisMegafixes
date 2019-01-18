@extends('master')

@section('content')

<div class="container my-4" id="VerTutorial">
    <div class="alert alert-dark" role="alert">

       <span class="h5 mr-3">{{$tutorial->utilizador->name}}</span><a href="/utilizador/tutoriaisList/{{$tutorial->utilizador->id}}" class="btn btn-success" style="color:white;">Tutoriais</a>
        </div>
    <div class="jumbotron pt-4">
        <div class="text-center">
{{--{{dd($tutorial)}}--}}
            <h3>{{$tutorial->titulo}}</h3>

        </div>



        <div class="content text-center">
            <div class="d-flex justify-content-center">
                <div class="img-thumbnail img_capa">
                    <img width="407px" src="/storage/Tutoriais_img_capa/{{$tutorial->img_capa}}">
                </div>

            </div>
            <hr>
            <div class="tutorial_content">

                <!-- convert to html :/ no safety at all.... -->
                {!! $tutorial->content !!}

            </div>
        </div>

    </div>


    


</div>

@endsection