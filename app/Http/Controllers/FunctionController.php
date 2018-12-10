<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Produto as Produto;
use \App\Plano as Plano;
use \App\User;

class FunctionController extends Controller
{

public function mostrarProdutos(){
  $produtos = Produto::All();
  return view('adminProdutos', array('produtos' => $produtos));
}

public function storeProdutos(){
  $produtos = Produto::All();
  return view('store', array('produtos' => $produtos));
}

public function storePlanos(){
  $planos = Plano::All();
  return view('storeplanos', array('planos' => $planos));
}


public function cadastrarProduto(Request $r) {
  if ($r->isMethod('get')) {
    return view('cadastrarProduto');
  }
  $nameFile = null;
  if ($r->image) {
    $novo_produto = new Produto;

    // Define um aleatório para o arquivo baseado no timestamps atual
    $name = uniqid(date('HisYmd'));
    // Recupera a extensão do arquivo
    $extension = $r->image->extension();
    // Define finalmente o nome
    $nameFile = "{$name}.{$extension}";

    // Faz o upload
    //$upload = $r->image->storeAs('img', $nameFile);
    /*$r->file('image')->move(
      base_path().'/public/img/'
    );*/
    $novo_produto->nomeProdutos = $r->input('nomeProdutos');
    $novo_produto->descricaoProdutos = $r->input('descricaoProdutos');
    $novo_produto->categoriaProdutos = $r->input('categoriaProdutos');
    $novo_produto->valorProdutos = $r->input('valorProdutos');
    //$novo_produto->caminhoImagemProdutos = $r->input('caminhoImagemProdutos');
    //$imagem = $r->image->store('categories', $nameFile);
    $novo_produto->caminhoImagemProdutos = $r->image->storeAs('img', $nameFile);


    if ($novo_produto->save()) {
      return view('cadastrarProduto',
      array('msg' => 'Produto gravado com sucesso'));
    } else {
      return view('cadastrarProduto',
      array('msg' => 'Erro na gravação do produto'));
    }
  }
}

public function cadastrarPlano(Request $r) {
  if ($r->isMethod('get')) {
    return view('cadastrarPlano');
  }
  $nameFile = null;
  if ($r->image) {
    $novo_plano = new Plano;

    // Define um aleatório para o arquivo baseado no timestamps atual
    $name = uniqid(date('HisYmd'));
    // Recupera a extensão do arquivo
    $extension = $r->image->extension();
    // Define finalmente o nome
    $nameFile = "{$name}.{$extension}";

    // Faz o upload
    //$upload = $r->image->storeAs('img', $nameFile);
    /*$r->file('image')->move(
      base_path().'/public/img/'
    );*/
    $novo_plano->nomePlanos = $r->input('nomePlanos');
    $novo_plano->descricaoPlanos = $r->input('descricaoPlanos');
    $novo_plano->validadePlanos = $r->input('validadePlanos');
    $novo_plano->valorPlanos = $r->input('valorPlanos');
    $novo_plano->valorAdesaoPlanos = 99;

    //$novo_plano->caminhoImagemPlanos = $r->input('caminhoImagemPlanos');
    //$imagem = $r->image->store('categories', $nameFile);
    $novo_plano->caminhoImagemPlanos = $r->image->storeAs('img', $nameFile);


    if ($novo_plano->save()) {
      return view('cadastrarPlano',
      array('msg' => 'Plano gravado com sucesso'));
    } else {
      return view('cadastrarPlano',
      array('msg' => 'Erro na gravação do Plano'));
    }
  }
}

public function atualizarProduto($id,Request $r) {
  if ($r->isMethod('get')) {
    $produto = Produto::find($id);
    return view('atualizarProduto', array('produto' => $produto));
  }

  $nameFile = null;

  if ($r->image) {

  $produto = Produto::find($id);
  // Define um aleatório para o arquivo baseado no timestamps atual
  $name = uniqid(date('HisYmd'));
  // Recupera a extensão do arquivo
  $extension = $r->image->extension();
  // Define finalmente o nome
  $nameFile = "{$name}.{$extension}";

  $produto->nomeProdutos = $r->input('nomeProdutos');
  $produto->descricaoProdutos = $r->input('descricaoProdutos');
  $produto->categoriaProdutos = $r->input('categoriaProdutos');
  $produto->valorProdutos = $r->input('valorProdutos');
  $produto->caminhoImagemProdutos = $r->image->storeAs('img', $nameFile);


  if ($produto->save()) {
    return view('atualizarProduto',
    array('msg' => 'Produto atualizado com sucesso', 'produto' => $produto));
  } else {
    return view('atualizarProduto',
    array('msg' => 'Erro na atualização do produto', 'produto' => $produto));
  }
}
}

public function deletarProduto($id) {
  $produto = Produto::find($id);
  if(empty($produto)) {
    return view('adminProdutos', array('msg' => 'Registro não encontrado', 'produto' => $produto));
  } else {
    $produto->delete();
    return redirect()->action('FunctionController@mostrarProdutos')->with('msg', 'Registro Deletado Com Sucesso');
  }
}

public function escolherProduto($id, Request $r) {
  $produto = Produto::find($id);
  if($produto === null) {
  return redirect()->action('FunctionController@storeProdutos')->with('msg', 'Produto Não Existe');
} else {
  return view('produto', array('produto' => $produto));
}
}

public function adicionarcarrinhosessao(Request $r){
  $cart = $r->session()->get('cart');


  if (isset($cart)) {
    foreach ($cart as $key => $value) {
        if ($value['idProdutos'] == $r->input('idProdutos')) {
          $cart[$key]['quantidadeProdutos'] =   $cart[$key]['quantidadeProdutos'] + $r->input('quantidadeProdutos');
          $r->session()->put('cart', $cart);
          return redirect()->action('FunctionController@pegarcarrinho');
          break;
        }
    }
  }
  $cart[] = array(
    "idProdutos" => $r->input('idProdutos'),
    'nomeProdutos' => $r->input('nomeProdutos'),
    'valorProdutos' => $r->input('valorProdutos'),
    'image' => $r->input('image'),
    'quantidadeProdutos' => $r->input('quantidadeProdutos')
  );
  $r->session()->put('cart', $cart);
  $r->session()->flash('Sucesso', 'carrinho atualizado com sucesso');
  return redirect()->action('FunctionController@pegarcarrinho');
}

public function pegarcarrinho(){

 $cart = session()->get('cart');
 return view('carrinho')->with('cart', $cart);
  // echo "<pre>";
  // var_dump($cart);
}

public function deletaSessao(Request $r){

  $teste = session()->flush('cart');
  return redirect()->action('FunctionController@storeProdutos');
  // echo "<pre>";
  // var_dump($cart);
}

public function deletarprodutocarrinho($id, Request $r){

  $cart = $r->session()->get('cart');
if (isset($cart)) {
  foreach ($cart as $key => $value) {
    if($value['idProdutos'] == $id) {
      unset($cart[$key]);
    }
  }
}
  $r->session()->put('cart', $cart);
  return redirect()->action('FunctionController@pegarcarrinho');
}

}
