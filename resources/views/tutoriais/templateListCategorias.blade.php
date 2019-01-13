
@extends('master')


@section('content')
    <div id="categorias" class="container my-3" style="max-width:700px;">
        <div class="card bg-light mb-3">
            <div class="card-header bg-primary text-white text-uppercase" ><i class="fa fa-list"></i> Categories</div>
            <ul class="list-group" >
                @foreach($categorias as $categoria)
                    <li class="list-group-item list-category">
                        <a style="color: black" class="d-flex justify-content-between" href="categorias/listTutoriais/{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}

                            <div>

                                <small style="line-height: 35px">{{$categoria->total_views}} <i class="fas fa-eye"></i></small>
                                <small style="line-height: 35px">{{$categoria->num_tutoriais_cat}} <i class="fab fa-leanpub"></i> </small>
                            </div>

                        </a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection