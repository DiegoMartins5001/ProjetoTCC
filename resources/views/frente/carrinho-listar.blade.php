@extends('layouts.frente-loja')

@section('conteudo')
<h2>Carrinho de compras</h2>
<div class='row'>
    <div class="text-muted col-sm-8">
        {{$itens->count()}} produtos no carrinho
    </div>
    <a href="{{route('carrinho.esvaziar')}}" class="btn btn-warning col-sm-2 pull-right">
        Esvaziar carrinho
    </a>
</div>
<hr/>
<table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th>Produto</th>
            <th class="text-right">Quantidade</th>
            <th class="text-right">Valor Unitário</th>
            <th class="text-right">Total do item</th>
        </tr>
    </thead>
    <tbody>
        @foreach($itens as $item)

        <tr>
            <td>
                <img src="{{route('imagem.file',$item->produto->imagem_nome)}}" alt="{{$item->produto->imagem_nome}}" data-lightbox="roadtrip" style="width:70px;" >
            </td>
            <td>
                <a href="{{route('produto.detalhes', $item->produto->id)}}">
                    {{$item->produto->nome}}
                </a>
            </td>
            <td class="text-right">
                {{$item->qtde}}
            </td>
            <td class="text-right">
                {{number_format($item->produto->preco_venda, 2, ',', '.')}}
            </td>
            <td class="text-right">
                {{number_format($item->produto->preco_venda * $item->qtde, 2, ',', '.')}}
            </td>
            <td> <a href="{{route('carrinho.remover-item', $item->produto->id)}}" 
                    class="btn btn-danger btn-xs pull-right">Excluir item </a>                
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" class="text-right">
                Total
            </td>
            <td>
                <h4 class="text-right text-danger">
                    {{number_format($total,2,',','.')}}
                </h4>
            </td>
        </tr>
        <tr>
            {!! Form::open(['method'=>'POST', 'url' => 'carrinho/calcFrete' , 'class'=>'']) !!}
            <td>
                {!! Form::input('text', 'cep', null, ['class'=>'form-control', 'placeholder'=>'Digite o CEP']) !!}
            </td>
            <td>
                {!! Form::submit('Calcular', ['class'=>'btn btn-primary input-group' ]) !!}
            </td>
            {!! Form::close() !!}
            <td>
            <div class="">
                @if(isset($valorfrete))
                    @if($itens->count()>0)
                        Frete: Entrega em {{$prazo}}, valor R$ {{$valorfrete}}               
                    @endif
                @else
                    {{'Frete'}}
                @endif
            </div>
            </td>
            <td>
                @if (Auth::guest())
                    <a href="{{route('carrinho.finalizar-compra')}}"
                        class="btn btn-success pull-right">
                           Faça seu login para finalizar a compra
                    </a>
                @else
                    <a href="{{route('carrinho.finalizar-compra')}}"
                        class="btn btn-success pull-right">
                           Finalizar Compra
                    </a>
                @endif
            </td>
        </tr>
    </tfoot>
</table>
@stop