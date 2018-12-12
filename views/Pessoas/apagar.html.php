
<form method="post" action="index.php?controller=pessoa&action=confirmarapagar">


    <div class="form-group">
        <label >Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Enter name" value="<?php echo"$pessoa->nome";?>" disabled>

    </div>
    <div class="form-group">
        <label >Data de Nascimento</label>
        <input type="date" class="form-control" name="data"   value="<?php echo $pessoa->data;?>" disabled>
    </div>
    <div class="form-group">
        <label>Curso:</label>
        <select class="form-control" name="select_Curso" disabled>
            <?php
            foreach($listaCursos as $curso): ?>
                <option value="<?php echo $curso["id"] ?>"<?php  echo ($curso["id"] == $pessoa->idcurso ? "selected":"") ?> ><?php echo $curso["nome"]?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label >Sexo:</label>
        <select class="form-control" name="select_Sexo" disabled>

            <option <?php if($pessoa->sexo== 'Feminino') echo"selected"; ?> >Feminino</option>
            <option <?php if($pessoa->sexo== 'Masculino') echo"selected"; ?> >Masculino</option>

        </select>
    </div>

    <input class="btn btn-primary" type="submit" name="Apagar" value="Remover">
    <input class="btn btn-primary" type="hidden" name="id" value="<?php echo"$pessoa->id";?>">


</form>
