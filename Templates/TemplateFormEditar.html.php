
<form method="post" action="">


<div class="form-group">
    <label >Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Enter name" value="<?php echo"$nome";?>">

</div>
<div class="form-group">
    <label >Data de Nascimento</label>
    <input type="date" class="form-control" name="data"  value="<?php echo $data;?>">
</div>
<div class="form-group">
    <label>Curso:</label>
    <select class="form-control" name="select_Curso" >
        <option <?php if($curso== 'CTeSP')  {echo"selected";} ?> >CTeSP</option>
        <option <?php if($curso== 'MCE') {echo"selected";} ?> >MCE</option>
        <option <?php if($curso== 'LEI')  {echo"selected";} ?> >LEI</option>

    </select>
</div>

<div class="form-group">
    <label >Sexo:</label>
    <select class="form-control" name="select_Sexo" >

        <option <?php if($sexo== 'Feminino') echo"selected"; ?> >Feminino</option>
        <option <?php if($sexo== 'Masculino') echo"selected"; ?> >Masculino</option>

    </select>
</div>

    <input class="btn btn-primary" type="submit" name="EditarValor" value="Salvar">
    <input class="btn btn-primary" type="hidden" name="id" value="<?php echo"$id";?>">


</form>
