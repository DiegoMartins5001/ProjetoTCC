@extends('layouts.admin')

@section('conteudo')

	<link href="{{asset('bootstrap/css/mycss/menu.css')}}" rel="stylesheet">
	<div class="panel panel-danger">  
		@if(Request::is('*/excluir'))
		<div class="panel-heading"> 
			<h3 >Deseja relamente excluir a Produto {!! $produto->nome !!}</h3>
		</div>
		@endif
	</div>
	
	{!! Form::open(['method'=>'DELETE', 'url'=>'/admin/produto/'.$produto->id.'/delete', 'style'=>'display: inline;']) !!}
	 	
	 	<button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span><strong>Excluir Produto</strong></button>

	 	<a href="{{Route('admin.produto.listar')}}"><div class="btn btn-success btn-sm glyphicon glyphicon-share-alt"> <strong>Cancelar</strong> </div></a>

	{!! Form::close() !!}

@stop