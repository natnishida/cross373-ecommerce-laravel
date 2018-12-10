<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cross 373</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

    <div id="app">
      <!-- Menu com logo e login / register -->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a href="/cross373/public/"><img src="../public/img/logo-cross373-fav.jpeg" alt="" class="navbar-brand" width="100"/></a>
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    Cross 373
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                          <li class="nav-item active">
                            <a class="nav-link" href="/cross373/public/">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/cross373/public/#sobre">Sobre</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/cross373/public/#horarios">Horários</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/cross373/public/contato">Contato</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Store</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/cross373/public/storeplanos">Planos</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/cross373/public/store">Produtos Fitness</a>
                            </div>
                          </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="page-footer font-small bg-dark" style="color:#FFF;">
    <div class="newsletter row col-lg-12">
      <div class="textonews row col-lg-5">
          <p>Inscreva-se na nossa newsletter!</p>
      </div>
      <div class="col-lg-7 col-md-12">
          <form action="" method="POST">
             <div class="form-row">
              <div class="form-group col-lg-3 col-md-5">
                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
              </div>
              <div class="form-group col-lg-3 col-md-5">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-dark" style="height:38px;">Cadastrar-se</button>
            </div>
          </form>
      </div>
    </div>
<!--
      <div class="social">
        <img class="socialicon" src="img/instagram.png" alt="email para o cross373" width="40">
        <img class="socialicon" src="img/facebook.png" alt="email para o cross373" width="35">
        <img src="img/email.png" alt="email para o cross373" width="50">
      </div>
      <hr>
      <br>
      <div class="contatos">
        <div class="row">
          <div class="col-lg-6">
            <button class="btn btn-danger" type="button" name="button">Agendar Free Pass </button>
          </div>
          <div class="col-lg-6">
            <a href="contato.php"><button class="btn btn-danger" type="button" name="button">Entre em Contato</button></a>
          </div>

        </div>
      </div>
      <hr>
      <br>
      <p>Telefone: (11) xxxxx-xxxx</p>
      <p>Endereço: Av. Nossa Sra. da Encarnação, 373. Jardim Maria Estela</p>
      <br>
      <hr>
      <br>


      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14620.619127815446!2d-46.5999536!3d-23.6346273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90450a21241cce54!2sAcademia+Nishida+Nata%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1536523586941" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
</footer> -->

<!-- Footer -->

    <div class="teste">
      <div class="container conecte_footer">
         Conecte-se em nossas redes sociais!
      </div>
      <div class="imgicone">
        <a href=""><img src="img/face.png" width="35px;"></a>
        <a href=""><img src="img/inst.png" width="35px;"></a>
        <a href=""><img src="img/email2.png" width="35px;"></a>
      </div>
    </div>

    <div class="fundofooter container text-center text-md-left mt-5">
      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Cross 373</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Somos mais que uma academia convencional , somos um centro de treinamento.

Temos a melhor estrutura de Treinamento Funcional e Lutas da região.</p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 linksfooter">
          <h6 class="text-uppercase font-weight-bold">Produtos</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Planos</a>
          </p>
          <p>
            <a href="#!">Produtos Fitness</a>
          </p>
          <p>
            <a href="#!">Link1</a>
          </p>
          <p>
            <a href="#!">Link2</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 linksfooter">
          <h6 class="text-uppercase font-weight-bold">Links úteis</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Sua conta</a>
          </p>
          <p>
            <a href="#!">Horários</a>
          </p>
          <p>
            <a href="#!">Sobre</a>
          </p>
          <p>
            <a href="#!">FAQ</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold">Contato</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p> Av. Nossa Senhora </p>
          <p>da Encarnação, 373</p>
          <p>Jd. Maria Estela, SP</p>
          <p>+ 11 9999-9999</p>
        </div>

      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> www.cross373.com</a>
    </div>


        </footer>


    </div>


</body>
</html>
