

@extends('master')


@section('content')

        <!--  bread crump -->

      <!---->
      <!--<div class="container">-->
      <!--    <div class="row">-->
      <!--        <div class="col">-->
      <!--            <nav aria-label="breadcrumb">-->
      <!--                <ol class="breadcrumb">-->
      <!--                    <li class="breadcrumb-item"><a href="">Home</a></li>-->
      <!--                    <li class="breadcrumb-item"><a href="">Category</a></li>-->
      <!--                    <li class="breadcrumb-item active" >Sub-category</li>-->
      <!--                </ol>-->
      <!--            </nav>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--</div>-->
      <!---->


            <!-- items by categories -->
        <div class="container">
            <div class="col" id="tutoriais">
                <div class="row mx-auto">

                    <!--              foreach cat-->

                    <div class="col-12 category-pages " style="

                      margin-left: 5%;
                                        ">

                        @foreach($tutoriais as $tutorial)

                                     <div class="float-left card ml-2 mt-1">

                                        <img class="card-img-top" src="/storage/Tutoriais_img_capa/{{$tutorial->img_capa}}" alt="Card image cap">

                                        <div class="card-body p-3 position-relative">


                                            <h4 class="card-title mb-1 ">
                                                <a href="/show/{{$tutorial->id}}" title="View Product">{{$tutorial->titulo}}</a>
                                            </h4>


                                            <small class="upload-time" ><i class="fas fa-clock"></i>{{$tutorial->created_at->format('H:i')}}</small>

                                            <p class="card-text description">{{$tutorial->descricao}}</p>

                                            <div class="row">


                                                <div class="col">
                                                    <div class="group d-flex justify-content-between mt-2">

                                                        <div class="rate w-100 d-flex justify-content-start">
                                                            @for ($i = 1; $i <=5 ; $i++)
                                                                <span class="fa fa-star
                                                        @if($tutorial->rating>=$i) checked @endif"></span>
                                                            @endfor
                                                        </div>


                                                        @switch($tutorial->dificuldade)

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
                                                </div>


                                            </div>


                                            <!--                            <p class="card-text description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                            <!--                            <div class="row">-->
                                            <!--                                <div class="col">-->
                                            <!--                                    <p class="btn btn-danger btn-block">99.00 $</p>-->
                                            <!--                                </div>-->
                                            <!--                                <div class="col">-->
                                            <!--                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>-->
                                            <!--                                </div>-->
                                            <!--                            </div>-->
                                        </div>
                                    </div>


                        @endforeach

                    </div>





                </div>
            </div>
        </div>



@endsection
