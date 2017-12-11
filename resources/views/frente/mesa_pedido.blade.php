@include('layouts.cliente_header')
<style>
.panel-info > .panel-heading{
    background-color:#e67e22;
    border-color:#e67e22;
    color:white;
}
.panel-info {
    border-color:#e67e22;
}
.text-info {
    color: #e67e22;
}
.btn-info{
  background-color:#e67e22;
  border-color:#e67e22;
}

.btn-info:hover{
  background-color:#d35400;
  border-color:#d35400;
}
.cor{color: #e67e22;}
</style>
<br/>
<div class="col-lg-12">
    <div class="container">
        @include('layouts.messages')
    </div>
</div>
<br/>
<div class='container'>
    <h2 style='margin-bottom:30px;' class='text-center'>Número do seu pedido:{{$pedido->id_venda}}</h2>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Pendente</h3>
            </div>
            <div class="panel-body text-center">
                <h1 class="text-info">
                @if($pedido->status==1)<h2 class='cor'>Status Atual</h2>@endif  
                </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Em Andamento</h3>
            </div>
            <div class="panel-body text-center">
                <h1 class="text-info">
                @if($pedido->status==2)<h2 class='cor'>Status Atual</h2>@endif
                </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Pronto</h3>
            </div>
            <div class="panel-body text-center">
                <h1 class="text-info">
                @if($pedido->status==3)<h2 class='cor'>Status Atual</h2>@endif
                </h1>
            </div>
        </div>
    </div>
</div>  
@if($pedido->status == 3)
<div class='container'>
   <h3 style="padding-bottom:10px;" class='text-success text-center' >Retire Seu Pedido No Balcão E Bom Apetite :)</h3>

   <div class="container">
        <a class="btn btn-success btn-lg col-sm-4 col-md-offset-3" href="{{url('getmesa',\Session::get('id_mesa'))}}">Voltar para o cardápio</a>
        <a class="btn btn-danger btn-lg col-sm-1 col-sm-offset-1" href="{{url('volte_sempre_liberar',\Session::get('id_mesa'))}}">Sair</a>
    </div>
</div>
@endif

<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript">
    var id = '{{$pedido->id_venda}}';
    setTimeout(
        function(){
            window.location = "http://localhost:8000/mesa_pedido/"+id; 
        },
    15000);
</script>