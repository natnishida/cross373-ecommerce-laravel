@extends('layouts.admin')


@section('content')

    <h1 class="lista-admin" style="margin-top: 2%">Painel Administrativo - Cross 373</h1>
      <p style="font-size: 2em; text-align: center">O que você deseja fazer?</p>
    <div class="container d-flex justify-content-around align-self-stretch" style="margin-top: 2%; margin-bottom:2%">

      <!-- Card de opções administrativas -->

        <div class="card p-2 border border-dark align-self-stretch" style="margin: 0">
            <img class="card-img-top" src="../public/img/iconeCliente.PNG" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Clientes</h5>
              <p class="card-text">Painel administrativo para visualização, cadastro e atualização de clientes.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Visualização da lista completa de clientes</li>
              <li class="list-group-item">Cadastrar novo cliente</li>

            </ul>

          </div>

            <div class="card p-2 border border-dark align-self-stretch" style="margin: 0">
                <img class="card-img-top" src="../public/img/iconeProduto.PNG" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Produtos</h5>
                  <p class="card-text">Painel administrativo para visualização, cadastro e atualização de produtos.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="{{ route('mostrarProdutos') }}">Visualização da lista completa de produtos</a></li>
                  <li class="list-group-item"><a href="{{ route('cadastrarProduto') }}">Cadastrar novo produto</a></li>

                </ul>

              </div>

              <div class="card p-2 border border-dark align-self-stretch" style="margin: 0">
                  <img class="card-img-top" src="../public/img/iconePlano.PNG" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Planos</h5>
                    <p class="card-text">Painel administrativo para visualização, cadastro e atualização de planos.</p>
                  </div>
                  <ul class="list-group list-group-flush " >
                    <li class="list-group-item">Visualização da lista completa de planos</li>
                    <li class="list-group-item">Cadastrar novo plano</li>
                  </ul>
                </div>

              <div class="card p-2 border border-dark align-self-stretch" style="margin: 0">
                  <img class="card-img-top align-self-stretch" src="../public/img/iconeTema.PNG" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Alterar Tema</h5>
                    <p class="card-text">Painel administrativo para atualização de tema do site.</p>
                  </div>

                  <div class="card-body align-self-stretch">
                  <button onclick="trocar()">Trocar Tema</button></a>
                  </div>
                </div>
<!-- Fim dos Cards de opções administrativas -->
</div>
<!-- fim da div container dos cards de opções administrativas -->


  </body>
<script type="text/javascript">
  function trocar() {
    var teste = document.getElementById('teste').href="{{ asset('css/stylealternative.css') }}";
    //teste[3].href = '{{ asset('css/stylealternative.css') }}';
  }
</script>
</html>
    @endsection
