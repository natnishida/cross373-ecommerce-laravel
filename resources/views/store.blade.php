@extends('layouts.app')


@section('content')

<!-- Banner -->
      <div class="bannerstore">
        <div class="bannerbg">
            <h2 id="titulobanner"><hr>Complete seu treino com nossos produtos!<hr></h2>
      </div>
    </div>
  <!-- Fim do Banner -->
<div class="galeria container-fluid">
  <div class="row">
        <div class="menustore rounded col-lg-2 col-md-2" >
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar.." style="width:80%;margin-left:10%;margin-top:10px;margin-bottom:10px;">
                      <button class="btn btn-outline-light my-2 my-sm-0 botaoresponse" style="width:50%; margin: auto;" type="submit">Buscar</button>
                    </form>
                    <div class="titulomenu">
                      <br>
                      <p> <strong>CATEGORIAS</strong> </p>
                      <br>
                      <hr>
                    </div>
                    <ul class="listamenu">
                      <li>Treinamento Funcional</li>
                      <li><hr></li>
                      <li>Acessórios</li>
                      <li><hr></li>
                      <li>Roupas</li>
                      <li><hr></li>
                      
                    </ul>
                </div>

        <div class="container-produtos col-lg-10 col-md-10 col-sm-12">
                <div class="row" style="margin: 0 auto;">
                  @isset($produtos)
                    @forelse($produtos as $produto)
                    <div class="col-lg-4 col-md-6">
                      <div class="card">
                        <img class="card-img-top rounded img-thumbnail" src="../storage/app/public/{{ $produto -> caminhoImagemProdutos }}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title"><a href="/cross373/public/produto/{{ $produto -> idProdutos }}">{{ $produto -> nomeProdutos }}</a></h4>
                              <p class="card-text">{{ $produto -> descricaoProdutos }}</p>
                            </div>
                    </div>
                        </div>
                  @empty
                  <p>não há registro de produtos</p>
                  @endforelse
                  @endisset

                  </div>
          </div>
  </div>
        <!-- Menu lateral -->


  </div>
    @endsection
