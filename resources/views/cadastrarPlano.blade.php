@extends('layouts.admin')


@section('content')

<div class="container">
	<div class="container-fluid">
			<form method="post" action="/cross373/public/admin/cadastrarplano" style="margin-top:100px;text-align:left;" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<h3>Insira o Plano</h3>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomePlanos">Nome Plano</label>
							<input type="text" class="form-control" id="nomePlanos" name="nomePlanos">
						</div>
						<div class="form-group col-md-6">
							<label for="descricaoPlanos">Descrição do Plano</label>
							<input type="text" class="form-control" id="descricaoPlanos" name="descricaoPlanos">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="validadePlanos">Validade do Plano</label>
							<input type="text" class="form-control" id="validadePlanos" name="validadePlanos">
						</div>
						<div class="form-group col-md-4">
							<label for="valorPlanos">Valor do Plano</label>
							<input type="number" class="form-control" id="valorPlanos" name="valorPlanos">
						</div>
						<!-- <div class="form-group col-md-6">
							<label for="caminhoImagemPlanos">Imagem do Plano</label>
							<input type="text" class="form-control" id="caminhoImagemPlanos" name="caminhoImagemPlanos">
						</div> -->
						<div class="form-group col-md-4" >
							<label for="customFile">Escolha a imagem</label>
							<input type="file" class="form-control" id="customFile" name="image">
						</div>
					</div>
					<button type="submit" class="btn btn-dark btn-primary btn-md" name="cadastrar" value="cadastrar" style="margin-bottom:20px;">Cadastrar</button>
			</form>

			@isset($msg)

					<div class="alert alert-success">
							{{ $msg }}
					</div>

			@endisset

		</div>
	</div>
    @endsection
