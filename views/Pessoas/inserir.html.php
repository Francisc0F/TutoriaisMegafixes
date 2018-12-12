
<form method="post" action="?controller=pessoa&action=inserirnova">


<div class="form-group">
    <label >Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Enter name" >

</div>
<div class="form-group">
    <label >Data de Nascimento</label>
    <input type="date" class="form-control" name="data" placeholder="Data de Nascimento" >
</div>
<div class="form-group">
    <label>Curso:</label>
    <select class="form-control" name="select_Curso" >
        <?php
        foreach($lista as $curso): ?>
        <option value="<?php echo $curso["id"] ?>"><?php echo $curso["nome"]; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label >Sexo:</label>
    <select class="form-control" name="select_Sexo" >
        <option>Feminino</option>
        <option>Masculino</option>
    </select>
</div>

<input class="btn btn-primary" type="submit" name="Inserir" value="Registar Pessoa">

</form>

