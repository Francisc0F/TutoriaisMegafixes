


@extends('master')
@extends('templates.header')
@extends('templates.footer')
@extends('templates.templateLoginRegist')



@section("AuthorsList")
    <div id="authors" class="container mt-4">


        <div class="list-group author-list">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <a href="#" class="p-0 author-list-item m-0 list-group-item list-group-item-action flex-column align-items-start position-relative">

                        <div class="row m-0">

                            <div class="col-12 pb-0 px-2">


                                <div class="row">
                                    <div class="col-1">
                                        <h4 style="line-height: 70px;">nome</h4>

                                    </div>

                                    <div class="col-11">
                                        <div class="row">
                                            <div class="col">

                                                <button class="btn btn-success mt-3">editar</button>
                                                <button class="btn btn-success mt-3">apagar</button>
                                                <button class="btn btn-success mt-3">ver tutoriais</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>




                    </a>
                </div>
            </div>

        </div>
    </div>


@endsection
