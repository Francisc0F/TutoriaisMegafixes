



<div id="Grouplogin" class="modal" >

    <div  id="login" ng-controller="loginCtrl" >
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="h3 mb-3">Login</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <form class="form-login" name="login">

                    <div class="modal-body">



                        <input type="text" ng-model="user.name" name="name" id="inputName" class="form-control"
                               placeholder="Name" required>

                                        <!-- $invalid = true quando input tiver vazio -->
                        <span ng-show="login.name.$invalid && !login.name.$pristine" class="text-danger ml-2"><small>Nome obrigatorio</small></span>



                        <input type="password" ng-model="user.password" name="password" ng-minlength="4" ng-maxlength="9"
                               id="inputPassword" class="form-control mt-2" placeholder="Password"  required>
                        <span ng-show="login.password.$error.required && !login.password.$pristine" class="text-danger ml-2"><small>Password obrigatoria</small></span>
                        <span ng-show="login.password.$error.minlength && !login.password.$pristine" class="text-danger ml-2"><small>Minimo 4 digitos</small></span>
                        <span ng-show="login.password.$error.maxlength" class="text-danger ml-2"><small>Max 9 digitos</small></span>


                        <!-- <div class="checkbox mb-3">
                             <label>
                                 <input type="checkbox" value="remember-me"> Remember me
                             </label>
                         </div>-->

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-lg btn-success" type="submit" ng-disabled="login.$pristine || login.$invalid" >Login</button>

                            <small class="chooseForm notMember" ng-click="resetForm(login)"> I am not a Member</small>

                    </div>

                </form>

            </div>
        </div>


    </div>
    <!-- registar-->

    <div id="register">
        <div class="modal-dialog " >
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="h3 mb-3">Sign in</h1>
                    <button type="button" class="close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form class="form-signin">

                    <div class="modal-body">



                        <input type="text"  class="form-control mb-2" placeholder="Your name">
                        <input type="text"  class="form-control mb-2" placeholder="Country">
                        <input type="text"  class="form-control mb-2" placeholder="City">


                        <input type="password" class="form-control mb-2" placeholder="Password" >
                        <input type="password" class="form-control mb-2" placeholder="Confirm Password" >
                        <input type="email"  class="form-control mb-2" placeholder="Your email" >

                        <!--  upload profile pic -->
                        <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 hide " data-multiple-caption="{count} files selected" multiple="">
                        <label for="file-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="20" height="17" viewBox="0 0 20 17">
                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                </path>
                            </svg> <span>Choose a file…</span></label>



                        <!-- <div class="checkbox mb-3">

                             <label>
                                 <input type="checkbox" value="remember-me"> Remember me
                             </label>
                         </div>-->

                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button class="btn btn-lg btn-success" type="submit">Sign in</button>
                        <small class="chooseForm Member">I am Member already!</small>
                    </div>

                </form>

            </div>
        </div>



    </div>

</div>

