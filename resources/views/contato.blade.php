@extends('layouts.app')


@section('content')

<div class="container-fluid" style="padding-top:50px;padding-bottom: 50px;">
	<div class="row">
		<div class="mapa col-lg-7 col-md-7">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.155006122538!2d-46.60213738495574!3d-23.63461927018696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b5c452b6593%3A0x873bb7d326cce2eb!2sAv.+Nossa+Sra.+da+Encarna%C3%A7%C3%A3o%2C+373+-+Sacom%C3%A3%2C+S%C3%A3o+Paulo+-+SP%2C+04180-080!5e0!3m2!1spt-BR!2sbr!4v1536605082364" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="col-lg-5 col-md-5" style="float:left;padding-left:50px;">
			<form style="text-align: left;">
				<div class="form-row" >
		            <div class="form-group col-md-10">
		            	<label for="inputNome">Nome</label>
		                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
		            </div>
		        </div>
		        <div class="form-row">
		              <div class="form-group col-md-10">
		              <label for="inputEmail">Email</label>
		              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
		            </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-10">
		              <label for="inputTel">Telefone</label>
		              <input type="number" class="form-control" id="inputTel" placeholder="9999-9999">
		            </div>
		        </div>
		        <div class="form-row">
			        <div class="form-group col-md-10">
					  <label for="comment">Mensagem:</label>
					  <textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
		          <button type="submit" class="btn btn-dark">Enviar</button>
			</form>
		</div>
	</div>
</div>
    @endsection
