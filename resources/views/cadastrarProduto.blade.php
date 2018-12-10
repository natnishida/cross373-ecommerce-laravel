@extends('layouts.admin')


@section('content')

<div class="container">
	<div class="container-fluid">
			<form method="post" action="/cross373/public/admin/cadastrarproduto" style="margin-top:100px;text-align:left;" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<h3>Complete seu cadastro</h3>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomeProdutos">Nome Produto</label>
							<input type="text" class="form-control" id="nomeProdutos" name="nomeProdutos">
						</div>
						<div class="form-group col-md-6">
							<label for="descricaoProdutos">Descrição do Produto</label>
							<input type="text" class="form-control" id="descricaoProdutos" name="descricaoProdutos">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="categoriaProdutos">Categoria do Produto</label>
							<input type="text" class="form-control" id="categoriaProdutos" name="categoriaProdutos">
						</div>
						<div class="form-group col-md-4">
							<label for="valorProdutos">Valor do Produto</label>
							<input type="number" class="form-control" id="valorProdutos" name="valorProdutos">
						</div>
						<!-- <div class="form-group col-md-6">
							<label for="caminhoImagemProdutos">Imagem do Produto</label>
							<input type="text" class="form-control" id="caminhoImagemProdutos" name="caminhoImagemProdutos">
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
