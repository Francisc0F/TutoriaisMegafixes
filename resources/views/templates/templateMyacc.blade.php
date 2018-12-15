@extends('master')
@extends('templates.header')
@extends('templates.footer')
@extends('templates.templateLoginRegist')

@section("author")

    <div class="container bootstrap snippet my-4" id="myacc">
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center" >
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="photo" alt="avatar">
                    <div class="row">
                        <div class="col">
                            <h6 class="mt-4">Upload a different photo...</h6>
                            <!-- own style input -->
                            <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1 hide" data-multiple-caption="{count} files selected" multiple="">
                            <label for="file-1">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="20" height="17" viewBox="0 0 20 17">
                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                    </path>
                                </svg> <span>Choose a file…</span></label>



                                <a class="btn btn-lg btn-success apagar w-100">Apagar Conta</a>
                                <a class="btn btn-lg btn-success novo-tutorial w-100 mt-2 ">Novo tutorial</a>


                        </div>

                    </div>
                </div>
                <br>


                <div class="panel panel-default">

                    {{--<div class="panel-body">--}}
                        {{--<a href="http://bootnipets.com">meus tutoriais</a>--}}
                    {{--</div>--}}
                </div>

                <div class="accTutorials">
                    <ul class="list-group">
                        <li class="list-group-item text-muted">Activity </li>

                        @for ($i = 0; $i <3 ; $i++)

                            <li class="list-group-item ">
                                <div class="row">
                                    <div class="col text-center">
                                        <strong>
                                            Tutorial de como matar um porco com um machado
                                        </strong>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center mt-1">
                                    <a class="btn btn-lg btn-success edit-tutorial" >Edit</a>
                                    <a class="btn btn-lg btn-success apagar-tutorial ml-1" >Apagar</a>
                                </div>



                            </li>
                        @endfor
                    </ul>

                </div>


            </div><!--/col-3-->
            <div class="col-sm-9">

                <div>
                    <div class="tab-pane active" id="home">

                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"> Save</button>
                                    <button class="btn btn-lg btn-success" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->


@endsection