

<div class="container mt-4 text-center ">


    <form class="form-signin" style=";max-width: 330px;padding: 15px;margin: 0 auto;"
          method="post" action="?controller=users&action=validalogin" novalidate>

        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal text-info">Gestao de Alunos e Cursos</h1>
      <!--  <label >User</label>-->

        <input type="text" id="inputName" name="name" class="form-control my-2" placeholder="Username" required="" >
        <!--<label>Password</label>-->
        <input type="password" id="inputPassword" name="password" class="form-control my-2" placeholder="Password" required="">
        <!--<div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin" value="admin">Admin</button>
        <button class="btn btn-lg btn-secondary btn-block" type="submit" name="viewer" value="viewer">Viewer</button>

    </form>

    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>

</div>
