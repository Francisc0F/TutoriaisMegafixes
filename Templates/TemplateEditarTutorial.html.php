

<div class="container" id="editarTutorial">


    <form method="post" action="">


        <div class="form-group">
            <label >Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Enter name" value="">

        </div>
        <div class="form-group">
            <label >Data de Nascimento</label>
            <input type="date" class="form-control" name="data"  value="">
        </div>
        <div class="form-group">
        </div>

        <div class="form-group">
            <label >Sexo:</label>
            <select class="form-control" name="select_Sexo" >

                <option >Feminino</option>
                <option>Masculino</option>

            </select>
        </div>

        <input class="btn btn-primary" type="submit" name="EditarValor" value="Salvar">
        <input class="btn btn-primary" type="hidden" name="id" value="">


    </form>

</div>