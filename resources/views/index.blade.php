@extends('layouts.app')


@section('content')

<!-- Carrossel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="img/banner1.png?auto=yes&bg=777&fg=555&text=First slide" alt="Cross373">
<div class="carousel-caption d-none d-md-block">
<h3><strong>Cross 373</strong></h3>
<h4>Treinar é se divertir</h4>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="img/banner2.png?auto=yes&bg=777&fg=555&text=Second slide" alt="Second slide">
<div class="carousel-caption d-none d-md-block">
<h3><strong>Cross 373</strong></h3>
<h4>Treinar é se Superar</h4>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="img/banner3.png?auto=yes&bg=777&fg=555&text=Third slide" alt="Third slide">
<div class="carousel-caption d-none d-md-block">
<h3><strong>Cross 373</strong></h3>
<h4>Treinar é se desafiar</h4>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<!-- Fim do carrossel -->

<div class="fraseefeito bg-dark">
  <hr>
  <h2 id="sobre">"Treinar é se divertir, se superar e se desafiar!"</h2>
  <hr>
</div>
    <!-- Sobre nós -->
<div class="sobrenos container-fluid" >
  <div class="row">
    <div class="textosobre col-lg-7">
        <div class="titulosobre">
          <h2>Sobre a Cross 373</h2>
        </div>
      <hr>
      <div class="txtsobre">
        <p>Somos mais que uma academia convencional , somos um centro de treinamento.</p>
        <p>Temos a melhor estrutura de Treinamento Funcional e Lutas da região.</p>
        <p>Tudo para garantir o melhor treino para nossos alunos.</p>
        <p>Com uma equipe de qualidade e profissionais certificados, somos perfeitos para você!</p>
        <p>Seja qual for seu objetivo, nós vamos alcança-los juntos!</p>
      </div>
    </div>
    <div class="imgsobre col-lg-5">
      <br>
    </div>
  </div>
</div>

<div id="horarios" class="parallaxhorarios ">

  <div class="textohorarios">
      <h2>Horários</h2>
      <hr>
      <p>Veja abaixo os horários disponíveis no Cross 373 e venha com a gente!</p>
  </div>
</div>

<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="menu-section">
      <h2 class="menu-section-title">Manhã</h2>
      <hr>
          <br>
      <div class="modalidades">
        <div class="modhorario"> 06:00 </div>

        <div class="descricaomod"> Crosstraining </div>
      </div>
      <div class="modalidades">
        <div class="modhorario"> 07:00 </div>

        <div class="descricaomod"> Crosstraining </div>
      </div>
      <div class="modalidades">
        <div class="modhorario"> 08:00 </div>

        <div class="descricaomod"> Crosstraining </div>
      </div>
      <br>

      <div class="divbotao">
      <a href="/cross373/public/contato" class= "botaocontato btn btn-outline-dark " name="button"> Agendar Experimental</a>
      </div>

    </div>
  </div>
  <div class="col-xs-12 col-sm-6">
    <div class="menu-section">
      <h2 class="menu-section-title">Noite</h2>
      <hr>
          <br>
      <div class="modalidades">
        <div class="modhorario"> 18:00 </div>

        <div class="descricaomod"> Crosstraining </div>
      </div>
      <div class="modalidades">
        <div class="modhorario"> 19:00 </div>

        <div class="descricaomod"> Crosstraining </div>
      </div>
      <div class="modalidades">
        <div class="modhorario"> 20:00 </div>

        <div class="descricaomod"> Crosstraining </div>
      </div>
      <br>
        <div class="divbotao">
          <a href="/cross373/public/contato" class= "botaocontato btn btn-outline-dark " name="button"> Agendar Experimental</a>
        </div>

    </div>
  </div>
</div>
</div>
  <div class="parallaxgaleria">

    <div class="textogaleria">
        <h2>Galeria</h2>
        <hr>
        <p>Fotos do Cross 373</p>
    </div>
  </div>
<div class="galeria container-fluid">


  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <img class="card-img-top rounded" src="img/imgsobrenos2.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Treinamento com corda naval.</h4>
          <p class="card-text">Treino de resistência na Cross 373.</p>

        </div>
      </div>
      <div class="card">
  <img class="card-img-top rounded" src="img/galeria4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Treinamento com corda naval.</h4>
    <p class="card-text">Treino de resistência na Cross 373.</p>

  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <img class="card-img-top rounded" src="img/galeria1.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Treino com Kettlebell.</h4>
          <p class="card-text">Treino de força na Cross 373.</p>

        </div>
      </div>
      <div class="card">
  <img class="card-img-top rounded" src="img/cross2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Flexão com halteres.</h4>
    <p class="card-text">Treino de força na Cross 373.</p>

  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12" id="esconder">
      <div class="card" >
        <img class="card-img-top rounded" src="img/cross3.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Salto na Plyo Box</h4>
          <p class="card-text">Treino de potência na Cross 373.</p>

        </div>
      </div>
      <div class="card">
  <img class="card-img-top rounded" src="img/galeria3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Treinamento com trenó na Cross 373</h4>
    <p class="card-text">Treino de potência na Cross 373.</p>

  </div>
</div>
    </div>
</div>
</div>
    @endsection
