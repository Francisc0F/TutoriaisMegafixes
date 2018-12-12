
<?php

$dados=$lista;

//var_dump($dados);
?>

<?php if(count($dados) > 0): ?>
<div class="container">

        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>
                    Nome Curso
                </th>
                <th>
                    Numero de Pessoas
                </th>
                <?php  if(isset($_SESSION["LogAsAdmin"]) && $_SESSION["LogAsAdmin"]==true):?>
                <th>
                    Editar/Apagar
                </th>
                <?php  else:?>
                <?php  endif;?>
            </tr>
            </thead>

            <tbody>

            <?php   $corRosa=null;

            foreach($dados as $curso): ?>
                <tr style="">

                    <td>
                        <?php echo $curso['nome']; ?>
                    </td>
                    <td>
                        <?php $num=$curso["num_pessoas"]; echo($num>0?"$num":"Sem alunos")?>

                    </td>
                    <?php  if(isset($_SESSION["LogAsAdmin"]) && $_SESSION["LogAsAdmin"]==true):?>
                    <td>
                        <!--editar-->

                        <a href="index.php?controller=curso&action=editar&nome=<?php echo $curso['nome']?>"
                           class="btn btn-primary">Editar</a>


                        <a href="index.php?controller=curso&action=apagar&nome=<?php echo $curso['nome']?>"
                           class="btn btn-danger <?php if($curso["num_pessoas"]>0){echo "disabled";} ?>" >Apagar</a>


                    </td>
                   <?php else: ?>
                   <?php endif; ?>

                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

    <?php else: ?>
        <span>Não existem cursos dados...</span>
    <?php endif; ?>

</div>