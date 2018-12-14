


@section("loginRegist")
<div id="Grouplogin" class="modal">

    <div  id="login" >
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="h3 mb-3">Login</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form class="form-login">

                    <div class="modal-body">



                        <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Name">


                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" >
                        <!-- <div class="checkbox mb-3">
                             <label>
                                 <input type="checkbox" value="remember-me"> Remember me
                             </label>
                         </div>-->

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-lg btn-success" type="submit">Login</button>
                        <small class="chooseForm notMember">I am not a Member</small>
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


                        <input type="password" class="form-control mb-2" placeholder="Password" >

                        <input type="email"  class="form-control" placeholder="Your email" >
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

@endsection