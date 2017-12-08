@extends('layouts.frente-loja')
@section('conteudo')
<style>
/* https://bootsnipp.com/snippets/featured/animation-loading-state   Author: Kosmom.ru*/.loading,.loading>td,.loading>th,.nav li.loading.active>a,.pagination li.loading,.pagination>li.active.loading>a,.pager>li.loading>a{
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
    background-size: 40px 40px;
animation: 2s linear 0s normal none infinite progress-bar-stripes;
-webkit-animation: progress-bar-stripes 2s linear infinite;
}
.btn.btn-default.loading,input[type="text"].loading,select.loading,textarea.loading,.well.loading,.list-group-item.loading,.pagination>li.active.loading>a,.pager>li.loading>a{
background-image: linear-gradient(45deg, rgba(235, 235, 235, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(235, 235, 235, 0.15) 50%, rgba(235, 235, 235, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
}





.btn3d {
    position:relative;
    top: -6px;
    border:0;
     transition: all 40ms linear;
     margin-top:10px;
     margin-bottom:10px;
     margin-left:2px;
     margin-right:2px;
}
.btn3d:active:focus,
.btn3d:focus:hover,
.btn3d:focus {
    -moz-outline-style:none;
         outline:medium none;
}
.btn3d:active, .btn3d.active {
    top:2px;
}
.btn3d.btn-white {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #f5f5f5, 0 8px 8px 1px rgba(0,0,0,.2);
    background-color:#fff;
}
.btn3d.btn-white:active, .btn3d.btn-white.active {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
    background-color:#fff;
}
.btn3d.btn-default {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #BEBEBE, 0 8px 8px 1px rgba(0,0,0,.2);
    background-color:#f9f9f9;
}
.btn3d.btn-default:active, .btn3d.btn-default.active {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
    background-color:#f9f9f9;
}
.btn3d.btn-primary {
    box-shadow:0 0 0 1px #417fbd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #4D5BBE, 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#4274D7;
}
.btn3d.btn-primary:active, .btn3d.btn-primary.active {
    box-shadow:0 0 0 1px #417fbd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color:#4274D7;
}
.btn3d.btn-success {
    box-shadow:0 0 0 1px #31c300 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#78d739;
}
.btn3d.btn-success:active, .btn3d.btn-success.active {
    box-shadow:0 0 0 1px #30cd00 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #78d739;
}
.btn3d.btn-info {
    box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #348FD2, 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#39B3D7;
}
.btn3d.btn-info:active, .btn3d.btn-info.active {
    box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #39B3D7;
}
.btn3d.btn-warning {
    box-shadow:0 0 0 1px #d79a47 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #D79A34, 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#FEAF20;
}
.btn3d.btn-warning:active, .btn3d.btn-warning.active {
    box-shadow:0 0 0 1px #d79a47 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #FEAF20;
}
.btn3d.btn-danger {
    box-shadow:0 0 0 1px #b93802 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #AA0000, 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#D73814;
}
.btn3d.btn-danger:active, .btn3d.btn-danger.active {
    box-shadow:0 0 0 1px #b93802 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #D73814;
}
.btn3d.btn-magick {
    color: #fff;
    box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #9823d5, 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#bb39d7;
}
.btn3d.btn-magick:active, .btn3d.btn-magick.active {
    box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #bb39d7;
}

</style>
<br/>
    @if(\Session::get('cliente')=='')
        <div class="alert alert-info alert-dismissable text-center">
            <strong>Ola!</strong>Se Você se cadastrar no nosso Sistema, Suas compras terão <strong>Desconto</strong>, Faça seu cadastro clicando no botão abaixo:<br/><a class='btn btn-primary btn-sm'  href="{{url('cadastrar_cliente')}}">Cadastrar</a> <br/> Ou acesse sua conta<br/><a href="{{url('login_cliente')}}" class='btn btn-info btn-sm'>Acessar</a> 
        </div>
    @endif
    <a class="btn btn-info" href="{{url('volte_sempre_liberar',\Session::get('id_mesa'))}}">Sair da mesa</a>
    <br/>
    <br/>
    <div class="form-group">
        <label class="radio-inline">
            <input checked  value="1" type="radio" name="menu">Produtos em Destaque
        </label>
        <label class="radio-inline">
            <input value="2" type="radio" name="menu">Cardápio
        </label>
        <p class="mensagem_error">{{$errors->first('servico',':message')}}</p>
    </div>
    <div id='prod_destacado'>
        <h1 class='hidden-xs'>Produtos em Destaque:</h1>
        <h1 style='margin-top:50px;' class='hidden-lg hidden-md hidden-sm '>Produtos em Destaque:</h1>
        <div class='col-sm-12'>
            <div class="page-header text-muted">
                <h3 style="color: #26C6DA";>{{count($produto_destacado)}} Produtos em Destaque</h3>
            </div>
        </div>
        <div class="col-md-12">
            @foreach($produto_destacado->chunk(3) as $chunked)
            <div class="row">
            @foreach($chunked as $produto_destacado)
                <div class="teste">
                    <div class="col-sm-6 col-md-4">
                        <div class="front">
                            <img style='height:300px; width:300px;' src="{{asset('uploads/'.$produto_destacado->imagem_nome)}}" alt="{{$produto_destacado->imagem_nome}}">
                            <a style="width:99%;" class='btn btn-info btn-lg btn-block text-center loading disabled'>Clique Aqui Para Mais Informações</a>
                        </div>
                        <div class="back">
                            <div class="caption">
                                <img style='height:300px; width:300px;' src="{{asset('uploads/'.$produto_destacado->imagem_nome)}}" alt="{{$produto_destacado->imagem_nome}}">
                                <div><h3>{{$produto_destacado->nome}}</h3></div>
                                <h4 class="text-muted">{{$produto_destacado->marca->nome}}</h4>
                                <p style="width: 200px;" class="col-xs-4">{{str_limit($produto_destacado->descricao,100)}}</p>
                                <button type="button" class="btn btn-primary btn-lg getid" value='{{$produto_destacado->id}}' data-toggle="modal" data-target="#myModal">Mais Detalhes</button>
                                <h4>R$:{{$produto_destacado->preco_venda}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <br/>
    <div id='cardapio_produtos'>
        <h2 style="padding-bottom: 50px;">Cardápio</h2>
        <div class="col-md-12">
        @foreach($produto->chunk(3) as $linha)
            <div class='row'>
            @foreach($linha as $produto)
                <div class="col-sm-6 col-md-4 flip" style="margin-bottom: 30px;">
                    <div class="front">
                        <img style='height:300px; width:300px;' src="{{asset('uploads/'.$produto->imagem_nome)}}" alt="">
                        <a style="width:99%;" class='btn btn-info btn-lg btn-block text-center loading disabled'>Clique Aqui Para Mais Informações</a>
                    </div>
                    <div class="back">
                        <img style='height:300px; width:300px;' src="{{asset('uploads/'.$produto->imagem_nome)}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{$produto->nome}}
                            </h4>
                            <p class="card-text">{{str_limit($produto->descricao,100)}}</p>
                            <h4 class="card-text">R${{$produto->preco_venda}}</h4>
                        <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-primary btn-lg getid" value='{{$produto->id}}' data-toggle="modal" data-target="#myModal">Mais Detalhes</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
               <p class='conteudo'></p>
               <p class='valor'></p>
               <img style='height:200px; width:200px;' class="imagem" />
               <div class='col-md-12'>
               <p>Média de avaliações<p>
               <h5 style="background-color:#2ecc71; border-radius:7px; height:30px; padding-top: 7px; color: black; font-weight: bold;" class="text-center avaliado col-md-3"><strong></strong>
               </h5>
               </div>
            <form class="action_carrinho"  action="{{route('adicionar')}}">
        </div>
        <div class="modal-footer">
                <p class='text-left'>Quantidade</p>
                <input style="width: 60px; margin-right: 10px;" type="numeric" value="1" name="quant" class="col-xs-1 form-control text-center quant" autocomplete="off">
                <br/>
                <br/>
                <button type="submit" name="botao" value="" class="btn btn-primary btn-lg  pull-left add_carrinho" > Adicionar ao carrinho</button>
            <button type="button" class="btn btn-default  pull-right" data-dismiss="modal">Fechar</button>
            </form>
        </div>
        </div>
      </div>
    </div>

    <!-- Modal carrinho -->
    <div id="carrinho_id" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title titulo">Carrinho</h4>
          </div>
          <div class="modal-body">
            <table style="display: block !important;" class="table table-responsive">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Produto</th>
                        <th class="text-right">Preço Unitário</th>
                        <th>Quantidade</th>
                        <th></th>
                        <th><a style="font-weight: bold;" href="{{route('carrinho.esvaziar')}}" class='btn btn-warning btn-sm'>Esvaziar Carrinho</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itens as $item)
                    <tr>
                        <td>
                            <img src="{{asset('uploads/'.$item->produto->imagem_nome)}}" alt="{{$item->produto->imagem_nome}}" data-lightbox="roadtrip" style="width:70px;" >
                        </td>
                        <td>
                            {{$item->produto->nome}}
                        </td>
                        <td class="text-center">
                            {{number_format($item->produto->preco_venda, 2, ',', '.')}}
                        </td>
                        <td class="text-center quant_item col-md-6 col-sm-6 col-xs-5"> 
                             <input style="width: 27px; height: 25px; margin-right: 1px; margin-top: 10px;" type="numeric" value="{{$item->qtde}}" name="quant" disabled class="col-sm-1 col-xs-1 form-control btn-xs text-center quant">
                                
                                <!--<button style="margin-right: 2px; margin-left: 1px; width: 10px; text-indent: -3px;" class="btn btn-primary btn-sm col-md-2 col-sm-2 col-xs-2 increment" type="submit" value="{{$item->produto->id}}">+</button>-->

                                <button style="text-indent: -5px; margin-bottom: 10px; padding-left: 14px; padding-right: 5px; margin-top: 15px;" type="button" value="{{$item->produto->id}}" name="teste" class="btn-xs btn-primary btn-sm-1 col-md-1 col-xs-1 btn-xs-1 col-sm-offset--1 btn3d increment"><span class="glyphicon glyphicon-plus"></span></button>

                                <button style="text-indent: -5.5px; margin-bottom: 10px; padding-left: 14px; padding-right: 5px; margin-top: 15px;" type="button" value="{{$item->produto->id}}" name="teste" class="btn-xs btn-primary btn-sm-1 col-md-1 col-xs-1 btn-xs-1 btn3d decrement"><span class="glyphicon glyphicon-minus"></span></button>

                                <!--<button style="text-indent: -3px;" name="teste" class="btn btn-primary btn-sm col-md-1 col-sm-1 col-xs-1 decrement" type="submit" value="{{$item->produto->id}}"> - </button>-->
                                
                        </td>
                        <td> 
                        <a href="{{route('remover', $item->produto->id, $item->qtde)}}" 
                                style="margin-bottom: 3px; margin-right: 15px; font-weight: bold;" class="btn btn-danger btn-xs pull-right">Excluir item</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right">
                            Total
                        </td>
                        <td>
                            <h4  id="total" class="text-center text-danger total">
                                R${{number_format($total,2,',','.')}}
                            </h4>
                        </td>
                    </tr>
                </tfoot>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default  pull-right" data-dismiss="modal">Fechar</button>
                <button type="submit" style="font-weight: bold;" name="botao" class="btn btn-primary btn-lg pull-left add_carrinho" ><span class="glyphicon glyphicon-shopping-cart"></span> Confirmar Pedido</button>
          </div>
        </div>
      </div>
    </div>
<!-- Code of Jquery Plugin Flip Image-->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!--<script src="{{asset('bootstrap/js/jquery-2.1.4.min.js')}}"></script>-->
<script type="text/javascript">
    $(function(){
    $(".flip").flip({
        axis: 'x',
        trigger: 'click'
    });
    $(".teste").flip({
        axis: 'x',
        trigger: 'click'
    });
});
</script>
<!-- End Code -->
<script type="text/javascript">
$(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-Token':$('input[name="_token"]').val()
        }
    });
        //console.log($('.titulo').size('Carrinho') ==0);
        //Correçao bug H4 mantendo nome do produto apos click em "Mais Detalhes"
    $( document ).ready(function() {
       $('.carrinho').on('click',function(){
        if($('.titulo').text('Carrinho') == false){
                $('.titulo').text('Carrinho');
            }
        }); 
    });
    $('.getid').click(function(){
        var id = $(this).attr('value');
        $.ajax({
            type: "GET",
            url: 'http://localhost:8000/mesa/produto/'+id,
            data: {id: id},
            success: function(id){
            avaliado = id.avaliacao_total/id.avaliacao_qtde;
            $('.modal-title').html(id.nome);
            $('.conteudo').html(id.descricao);
            $('.valor').html('R$: '+id.preco_venda);
            $(".imagem").attr("src",'http://localhost:8000/uploads/'+id.imagem_nome);
            $('.add_carrinho').val(id.id);
                if(Number.isNaN(avaliado)){
                  $('.avaliado').html('Não avaliado');  
                }else{
                  $('.avaliado').html(avaliado.toFixed(2));
                }
            },
        });
        
    });
});
//****----Increment----****//
$(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-Token':$('input[name="_token"]').val()
        }
    });
    $('.increment').on("click",function(){
        var id = $(this).attr('value');
        $.ajax({
            type: "GET",
            url: 'http://localhost:8000/increment_teste/'+id,
            data: {id : id},
            success: function(total) {
            //console.log(total);
            $('.total').html('R$'+total);   
            $(this).next().prop('disabled', false);
            var load = $(this).next().load('disabled', false);
            },
        });
        
    });
});
//****----Decrement----****//
$(function() {
    $.ajaxSetup({
        headers:{
            'X-CSRF-Token':$('input[name="_token"]').val()
        }
    });
    $('.decrement').on("click",function(){
        var id = $(this).attr('value');
        if($(this).prev().prev().val()<2){
        $(this).prop('disabled', true);
        }
        $.ajax({
            type: "GET",
            url: 'http://localhost:8000/decrement_teste/'+id,
            data: {id : id},
            success: function(total) {
            $('.total').html('R$'+total);
            },
        });
        
    });
});

$(function() {
    $('.add_carrinho').click(function(){
        window.location.href =  "http://localhost:8000/finalizar_cardapio/";
    });
});
//////////////incrementaçao btn
    $(".increment").on('click',function(){
        var value = $('.quant').val();
        $(this).prev().val(parseInt($(this).prev().val())+1); return false;
    });

    $(".increment").on('click',function(){
      if($(this).prev().val()<2){
            $(this).next().prop('disabled', true);
        }
    });

    $(".increment").on('click',function(){
      if($(this).prev().val()>1){
            $(this).next().prop('disabled', false);
        }
        
    });
//////////////decrementação btn
    $(".decrement").on('click',function(){
        if($(this).prev().prev().val()!=0){
            $(this).prev().prev().val(parseInt($(this).prev().prev().val())-1);
        }
    });
//////////////disable on click btn decrement
    $(".decrement").on('click',function(){
        if($(this).prev().prev().val()<2){
            $(this).prop('disabled', true);
        }
    });

$(function() {
    $('.cadastrar').click(function(){
        window.location.href =  "http://localhost:8000/cadastrar_cliente/";
    });
});
</script>
<!-- DIVS CARDAPIO E PRODUTOS EM DESTAQUE SCRIPT  -->
<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#pag_cartao').hide();
   $('input[name="menu"]').click(function () {
    if($('input[name="menu"]:checked').val() == '1') {
        prod_destaque();
    }else{
       cardapio_prod(); 
    }
    });

});
function prod_destaque(){

    if($('input[name="menu"]:checked').val() == '1') {
        $('#prod_destacado').show();
        $('#cardapio_produtos').hide();
    }
    else {
        $('#prod_destacado').hide();
        $('#cardapio_produtos').show();
    }
}

function cardapio_prod(){
    if($('input[name="menu"]:checked').val() == '2') {
        $('#cardapio_produtos').show();
        $('#prod_destacado').hide();
    }
    else {
        $('#prod_destacado').show();
        $('#cardapio_produtos').hide();
    }
}
</script>
@stop