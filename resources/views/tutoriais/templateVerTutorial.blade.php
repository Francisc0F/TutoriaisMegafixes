@extends('master')

@section('content')

<div class="container my-4" id="VerTutorial">

    <div class="jumbotron pt-4">
        <div class="text-center">

            <h3>{{$tutorial->titulo}}</h3>

        </div>

        <div class="content text-center">
            <div class="img-thumbnail img_capa">
                <img src="/storage/Tutoriais_img_capa/{{$tutorial->img_capa}}">
                
            </div>
            <div class="tutorial_content">
                <!-- convert to html -->
                {!! $tutorial->content !!}

            </div>
        </div>

    </div>


    


</div>

@endsection