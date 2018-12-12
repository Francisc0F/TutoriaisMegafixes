
<?php

$dados=$lista;



//var_dump($dados);
?>


<div class="container">
    <?php if(count($dados) > 0): ?>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>
                Nome
            </th>
            <th>
                Nascimento (Idade)
            </th>
            <th>
                Sexo
            </th>
            <th>
                Curso
            </th>

            <?php  if(isset($_SESSION["LogAsAdmin"]) && $_SESSION["LogAsAdmin"]==true):?>
            <th>
                Editar/ Apagar
            </th>
            <?php else: ?>
            <?php endif;?>
        </tr>
        </thead>

        <tbody>

        <?php   $corRosa=null;

        foreach($dados as $pessoa): ?>


            <?php  ?>
            <tr style="<?php if(Pessoa::checkAniv($pessoa['dataNascimento'])) echo"color:blue;";
            if($pessoa['sexo']=="Feminino") echo"background-color:pink;"; else echo"background-color:lightblue;" ;

            ?>">

                <td>
                    <?php echo $pessoa['nome']; ?>
                </td>

                <td>
                    <?php echo $pessoa['dataNascimento']; ?>

                    <?php echo '(' . Pessoa::calcIdade($pessoa['dataNascimento']) . ' anos)'; ?>
                </td>

                <td>
                    <?php echo $pessoa['sexo']; ?>
                </td>

                <td><?php  foreach ($listacursos as $curso){

                        if($pessoa['id_curso']==$curso["id"]){
                            echo $curso["nome"];
                        }
                    }

                    ?>
                </td>
                <?php  if(isset($_SESSION["LogAsAdmin"]) && $_SESSION["LogAsAdmin"]==true):?>
                <td>
                    <!--editar-->

                    <a href="index.php?controller=pessoa&action=editar&id=<?php echo $pessoa['id']?>"
                       class="btn btn-primary">Editar</a>


                    <a href="index.php?controller=pessoa&action=apagar&id=<?php echo $pessoa['id']?>"
                       class="btn btn-danger">Apagar</a>


                </td>
                <?php else: ?>
                <?php endif; ?>

            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <div class='row'>
        <div class='col-md-6'>
            <div class='col-md-6'>
                <p>
                    <?php echo 'Número Total de Registos: ' . count($dados); ?>
                </p>

                <p>
                    <?php echo 'Número Total de Homens: ' . Pessoa::contarPorSexo($dados)[0]; ?>
                </p>

                <p>
                    <?php echo 'Número Total de Mulhers: ' . Pessoa::contarPorSexo($dados)[1]; ?>
                </p>
            </div>

            <div class='col-md-6'>
                <p>
                    <?php //echo 'Total de Inscritos no CTeSP: ' . Pessoa::contarPorCurso($dados)[0]; ?>
                </p>

                <p>
                    <?php //echo 'Total de Inscritos no MCE: ' . Pessoa::contarPorCurso($dados)[1]; ?>
                </p>

                <p>
                    <?php //echo 'Total de Inscritos no LEI: ' . Pessoa::contarPorCurso($dados)[2]; ?>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <h1>Listagem alunos por curso</h1>
            <div class="row">
                <?php foreach ($listacursos as $curso): ?>
                    <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <td colspan="3" align="center"><?php echo $curso["nome"]?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nome
                        </th>
                        <th>
                            Nascimento (Idade)
                        </th>
                        <th>
                            Sexo
                        </th>

                    </tr>
                    </thead>
                    <?php foreach ($dados as $pessoa): ?>
                            <?php if($pessoa["id_curso"]==$curso["id"]):?>

                                <tbody>
                                <tr>
                                    <td>
                                        <?php echo $pessoa["nome"] ?>
                                    </td>

                                    <td>
                                        <?php echo $pessoa["dataNascimento"] ?>
                                    </td>

                                    <td>
                                        <?php echo $pessoa["sexo"] ?>
                                    </td>

                                </tr>

                                </tbody>
                            </table>
                    <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>



    </div>

</div>
    </div>


<?php else: ?>
    <span>Não existem dados...</span>
<?php endif; ?>

</div>