@extends('layouts.app')


@section('content')

<div class="container-fluid carrinho">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-lg-12" style="text-align: center">
                <h1 >Recebemos seu pedido, {{ Auth::user()->name }}!</h1>
                <img id="imagemty" onload="myFunction()" src="img/thankyoupage.jpg" alt="" width="50%" style="margin: 3%">
                <h3 style="color: black">Em breve você receberá um e-mail com mais detalhes.</h3>
            </div>


        </div>
    </div>
</div>


<script>

function myFunction() {
    setTimeout(function(){ location.replace("/cross373/public/store") }, 7000);
};

</script>

    @endsection
