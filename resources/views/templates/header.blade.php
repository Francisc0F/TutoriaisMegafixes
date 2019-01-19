

<nav id="header" class="navbar  sticky-top navbar-expand-lg navbar-dark header" >
    <div class="container">
        <a class="navbar-brand" href="/">TutoriaisMegaFixes!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/categorias">Categorias<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/authors">Autores</a>
                </li>
                @auth


                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/create">Novo Tutorial</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pb-0 d-flex justify-content-between" href="/acc">
                            <div class="img_Profile">

                            <img src="/storage/Fotos_utilizadores/{{Auth::user()->img_profile_utilizador}}"
                        >
                            </div>
                          <span class="ml-2">{{\App\Utilizador::split_name(Auth::user()->name)[0]}}</span>
                        </a>

                    </li>

                @endauth


                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Regist</a>
                </li>
                @endguest

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link btn-login-signIn" href="#"  >Login/sign in</a>--}}
                {{--</li>--}}


                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Dropdown--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<div class="dropdown-divider"></div>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                {{--</li>--}}
            </ul>

                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        <span>Logged in</span>
                                    @endif

            <div id="search">
                <form class="form-inline my-2 my-lg-0" method="post" action="/search">
                    @csrf
                    <input class=" btn btn-lg btn-success" style="" type="search" name="name" placeholder="Search" aria-label="Search">
                    {{--<button class="btn btn-lg btn-success my-2 my-sm-0" type="submit">Search</button>--}}
                </form>
            </div>

        </div>
    </div>

</nav>

