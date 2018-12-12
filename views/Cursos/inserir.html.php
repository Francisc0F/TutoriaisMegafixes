<?php if($notSucess == false) :?>
    <div class="container">

        <div class="alert alert-success" role="alert">
            Curso guardado na base dados com sucesso! <a href="?controller=curso&action=listar" class="alert-link">Volta a pagina inicial</a>
        </div>

    </div>

<?php elseif($Tried==true):?>

    <div class="container">

        <div class="alert alert-danger" role="alert">
            Ja Existe um Curso com Este nome! Insira outro nome :) <a href="?controller=curso&action=listar" class="alert-link">Volta a pagina inicial</a>
        </div>

    </div>

    <form method="post" action="?controller=curso&action=inserirnova">


        <div class="form-group">
            <label >Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome de Curso">

        </div>

        <input class="btn btn-primary" type="submit" name="Inserir" value="Registar Curso">

    </form>

<?php else: ?>

<form method="post" action="?controller=curso&action=inserirnova">


<div class="form-group">
    <label >Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome de Curso">

</div>

<input class="btn btn-primary" type="submit" name="Inserir" value="Registar Curso">

</form>
<?php endif; ?>