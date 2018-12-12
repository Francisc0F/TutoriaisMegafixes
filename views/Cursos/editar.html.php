
<?php if($notSucess == false) :?>
<div class="container">

    <div class="alert alert-success" role="alert">
        Curso guardado com sucesso! <a href="index.php?controller=pessoa&action=listar" class="alert-link">Queres voltar a pagina Inicial?</a>
    </div>

</div>

<?php elseif($Tried==true):?>

    <div class="container">

        <div class="alert alert-danger" role="alert">
            Este nome ja existe ou esta vazio:( tenta novamente! <a href="index.php?controller=pessoa&action=listar" class="alert-link">Queres voltar a pagina Inicial?</a>
        </div>

    </div>



<form method="post" action="index.php?controller=curso&action=guardar">

<div class="form-group">
    <label >Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Enter name" value="<?php echo"$curso->nome";?>">

</div>
    <input class="btn btn-primary" type="submit" name="guardar" value="Guardar Curso">
    <input class="btn btn-primary" type="hidden" name="id" value="<?php echo"$curso->id";?>">


</form>

<?php else: ?>

<form method="post" action="index.php?controller=curso&action=guardar">

    <div class="form-group">
        <label >Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Enter name" value="<?php echo"$curso->nome";?>">

    </div>
    <input class="btn btn-primary" type="submit" name="guardar" value="Guardar Curso">
    <input class="btn btn-primary" type="hidden" name="id" value="<?php echo"$curso->id";?>">


</form>


<?php endif;  ?>
