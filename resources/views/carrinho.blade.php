@extends('layouts.app')


@section('content')
<div class="container-fluid carrinho">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-lg-8">
                <h4>Carrinho de compra</h4>

                <table class="table" style="text-align: center">
                    <thead>
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                      @isset($cart)
                      @foreach($cart as $k => $v)
                        <tr>
                            <td><img src="{{ $v['image'] }}" style="width:80px;"><span style="padding-left:10px;">  {{ $v['nomeProdutos']}}</span></td>
                            <td>  {{ $v['quantidadeProdutos']}}</td>
                            <td>  R$ {{ $v['valorProdutos']}}</td>
                            <td> <a href="/cross373/public/deletarprodutocarrinho/{{ $v['idProdutos'] }}">X</a> </td>
                        </tr>
                      @endforeach
                      @endisset

                    </tbody>
                </table>

                <form class="form-inline" action="{{ route('store')}}" method="get">
                  <button type="submit" class="btn btn-dark">Continuar comprando</button>
                </form>
                        <!-- <form class="form-inline" style="padding-top:20px;">
                            <div class="form-group">
                                <label for="calcular" style="margin-left:0px;padding-right:10px;">Calcular frete</label>
                                <input type="text" class="form-control" id="calcular" placeholder="______-__" style="width:160px;">
                            </div>
                            <button type="submit" class="btn btn-dark">Ok</button>
                        </form> -->
            </div>
            <div class="col-lg-4">
                <div class="caixacarrinho">
                    <h4> RESUMO DO PEDIDO: </h4>
                    <div class="row">
                        <div class="col-6">Subtotal</div>
                        <div class="col-6">
                          @isset($cart)

                            <?php
                            $valorTotal = 0;
                              foreach ($cart as $key => $item) {
                                $valorTotal += $item['valorProdutos'];
                              }

                            echo 'R$ '.$valorTotal ?>


                          @endisset
                        </div>
                    </div>
                    <div class="row" style="border-bottom:1px solid #CCC;">
                        <div class="col-6">Frete Único</div>
                        <div class="col-6" style="margin-bottom:10px;">R$ 40</div>
                    </div>
                    <div class="row" style="font-weight:bold;padding-top:5px;font-size:18px;">
                        <div class="col-6">total</div>
                        <div class="col-6">@isset($cart)

                          <?php
                          $valorTotal = 0;
                            foreach ($cart as $key => $item) {
                              $valorTotal += $item['valorProdutos'];
                            }

                          $valorTotal = $valorTotal + 40;
                          echo 'R$ '.$valorTotal?>


                        @endisset</div>
                    </div>
                    <div class="row" style="border-bottom:1px solid #CCC;">
                        <div class="col-6"></div>
                        <div class="col-6" style="margin-bottom:10px;">em até 6x s/ juros</div>
                    </div>
                    <div class="row botaocarrinho">
                        <div class="col-12 text-center">
                          <form class="form-inline" action="{{ route('thankyoupage')}}" method="get">
                            <button type="submit" class="btn btn-dark">Finalizar Pedido</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection
