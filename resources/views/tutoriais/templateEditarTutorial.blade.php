@extends('master')

@section('content')

<div class="container my-4" id="InserirTutorial">

    <form method="post" action="/update/{{$tutorial->id}}" enctype="multipart/form-data" name="formName">

        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('message'))

            <div id="message">
                <div id="inner-message" class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('message') }}
                </div>
            </div>

        @endif


        <div class="form-group">
            <label >Categoria</label>

            <select class="form-control" name="select_categoria">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id_categoria}}" @if($tutorial->id_categoria==$categoria->id_categoria) selected @endif>{{$categoria->nome_categoria}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label >Dificuldade</label>
            <select class="form-control" name="select_dificuldade">

                @for ($i = 1; $i <= 3; $i++)
                    <option value="{{$i}}" @if($tutorial->dificuldade==$i){{"selected"}}@endif>
                        @switch($i)
                            @case(1)
                            Beginner
                            @break
                            @case(2)
                            Intermediate
                            @break
                            @case(3)
                            Advanced
                            @break

                    @endswitch
                    </option>

                @endfor

            </select>
        </div>




        <div class="form-group">
            <label >Titulo</label>
            <input type="text" class="form-control" name="title" value="{{$tutorial->titulo}}" placeholder="Titulo Tutorial">
        </div>
        <!-- img capa-->

         <div class="d-flex justify-content-start">
             <img class="img_Editar" src="/storage/Tutoriais_img_capa/{{$tutorial->img_capa}}">



             <div class="ml-3 mt-5 form-group">
                 <input type="file" accept="image/*" name="file" id="file-1" class="inputfile inputfile-1 hide" data-multiple-caption="{count} files selected" multiple="">
                 <label for="file-1">
                     <svg xmlns="http://www.w3.org/2000/svg"
                          width="20" height="17" viewBox="0 0 20 17">
                         <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                         </path>
                     </svg> <span>Escolhe uma imagem de capa</span></label>
             </div>
         </div>


        <div class="form-group">
            <div>
                <label>Descricao</label>
            </div>
        <textarea  name="descricao" rows="4" cols="50">{{$tutorial->descricao}}
        </textarea>

        </div>

        <div class="form-group">
            <label for="froala-editor">Tutorial Conteudo</label>
            <textarea id="froala-editor" name="conteudo">{{$tutorial->content}}</textarea>

        </div>


        <a class="btn btn-success" >Add image</a>
        <a class="btn btn-success" >Add paragraph</a>
        <hr>

        <input class="btn btn-success" type="submit" name="Inserir" value="Enviar">

    </form>


</div>

@endsection