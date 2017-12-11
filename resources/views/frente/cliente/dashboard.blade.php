@include('layouts.cliente_header')
<style>
.panel-danger > .panel-heading{
    background-color:#e67e22;
    border-color:#e67e22;
    color:white;
}
.panel-danger {
    border-color:#e67e22;
}
.text-info {
    color: #e67e22;
}
</style>
   <br/>   
    <div class="col-lg-12">
    <div class="container">
          @include('layouts.messages')
    </div>
  </div>
  <br/>
  <br/>
<h2>Painel de controle - {{\Session::get('nome_cliente')}}</h3>
<br/>
<div class="container">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="text-center">Total de pedidos</h3>
                </div>
                <div class="panel-body text-center">
                    <h1 class="text-info">
                        {{$qtdePedidos['total']}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="text-center">Pendentes de pagamento</h3>
                </div>
                <div class="panel-body text-center">
                    <h1 class="text-info">
                        {{$qtdePedidos['pendentes-pagamento']}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="text-center">Pagos</h3>
                </div>
                <div class="panel-body text-center">
                    <h1 class="text-info">
                        {{$qtdePedidos['pagos']}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-5 ">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="text-center">Finalizados</h3>
                </div>
                <div class="panel-body text-center">
                    <h1 class="text-info">
                        {{$qtdePedidos['finalizados']}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>