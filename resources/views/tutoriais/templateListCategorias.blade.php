
@extends('master')


@section('content')
    <div id="categorias" class="container">
        <div class="card bg-light mb-3">
            <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
            <ul class="list-group">
                @foreach($categorias as $categoria)
                    <li class="list-group-item list-category"><a href="/categorias/{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection