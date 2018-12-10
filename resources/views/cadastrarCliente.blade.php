@extends('layouts.app')


@section('content')

<div class="container">
	<div class="container-fluid">
			<form method="POST" action="" style="margin-top:100px;text-align:left;">

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
						<div class="form-group col-md-6">
							<label for="categoriaProdutos">Categoria do Produto</label>
							<input type="text" class="form-control" id="categoriaProdutos" name="categoriaProdutos">
						</div>
						<div class="form-group col-md-6">
							<label for="valorProdutos">Valor do Produto</label>
							<input type="text" class="form-control" id="valorProdutos" name="valorProdutos">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="inputState">Estado</label>
							<select id="inputState" class="form-control" name="estado">
									<option value="" selected disabled>Selecione...</option>
									<option value="acre">AC</option>
									<option value="alagoas">AL</option>
									<option value="amazonas">AM</option>
									<option value="amapa">AP</option>
									<option value="bahia">BA</option>
									<option value="ceara">CE</option>
									<option value="df">DF</option>
									<option value="espirito-santo">ES</option>
									<option value="goias">GO</option>
									<option value="maranhao">MA</option>
									<option value="mato-grosso">MT</option>
									<option value="mato-grosso-sul">MS</option>
									<option value="minas">MG</option>
									<option value="para">PA</option>
									<option value="paraiba">PB</option>
									<option value="parana">PR</option>
									<option value="pernambuco">PE</option>
									<option value="piaui">PI</option>
									<option value="rio-janeiro">RJ</option>
									<option value="rio-grande-norte">RN</option>
									<option value="rio-grande-sul">RS</option>
									<option value="rondonia">RO</option>
									<option value="roraima">RR</option>
									<option value="santa-catarina">SC</option>
									<option value="sao-paulo">SP</option>
									<option value="sergipe">SE</option>
									<option value="tocantins">TO</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="inputZip">CEP</label>
							<input type="text" class="form-control" id="inputZip" placeholder="00000-000" name="cep">
						</div>
						<div class="form-group col-md-7">
							<label for="inputAddress2">Complemento</label>
							<input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Andar, e/ou Referência" name="complemento">
						</div>
					</div>
					<div class="form-row">
					</div>
					<button type="submit" class="btn btn-dark btn-primary btn-md" name="cadastrar" value="cadastrar" style="margin-bottom:20px;">Cadastrar</button>
			</form>
		</div>
	</div>
    @endsection
