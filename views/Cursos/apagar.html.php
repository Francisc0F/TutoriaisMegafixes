
<?php if($sucess == true) :?>
    <div class="container">

        <div class="alert alert-success" role="alert">
            Curso apagado com sucesso <a href="index.php?controller=pessoa&action=listar" class="alert-link">Volta a pagina inicial</a>
        </div>

    </div>

<?php else:?>



<form method="post" action="index.php?controller=curso&action=confirmarapagar">


    <div class="form-group">
        <label >Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Enter name" value="<?php echo"$curso->nome";?>" disabled>


    <input class="btn btn-primary" type="submit" name="Apagar" value="Remover">
    <input class="btn btn-primary" type="hidden" name="id" value="<?php echo"$curso->id";?>">


</form>
<?php  endif;?>