@extends('master')
@extends('templates.header')
@extends('templates.footer')
@extends('templates.templateLoginRegist')


@section("inserirTutorial")

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
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <a class="btn btn-primary" type="button" >add image</a>
        <a class="btn btn-primary" type="button" >add paragraph</a>
        <hr>

        <input class="btn btn-primary" type="submit" name="Inserir" value="Inserir">

    </form>


</div>

@endsection