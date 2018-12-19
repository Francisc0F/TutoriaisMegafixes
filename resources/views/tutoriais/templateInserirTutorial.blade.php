@extends('master')

@section('content')

<div class="container my-4" id="InserirTutorial">

    <form method="post" action="">


        <div class="form-group">
            <label >Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome Tutorial">
        </div>

        <div class="form-group">
            <label >Categoria</label>
            <select class="form-control" name="select_Curso">
                <option>CTeSP</option>
                <option>MCE</option>
                <option>LEI</option>
            </select>
        </div>

        <div class="form-group">
            <label for="froala-editor">Example textarea</label>
            <textarea id="froala-editor" name="paragraph[]">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>

        </div>
        <div class="form-group">
            <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 hide" data-multiple-caption="{count} files selected" multiple="">
            <label for="file-1">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="20" height="17" viewBox="0 0 20 17">
                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                    </path>
                </svg> <span>Escolhe uma imagem</span></label>
        </div>

        <a class="btn btn-success" >Add image</a>
        <a class="btn btn-success" >Add paragraph</a>
        <hr>

        <input class="btn btn-success" type="submit" name="Inserir" value="Inserir">

    </form>


</div>

@endsection