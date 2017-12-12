<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@yield('cabecalho_novo')
<!DOCTYPE html>
<html>
<head>
<title>L & C</title>
<!-- Custom Theme files -->
<style type="text/css">
	@font-face {
    font-family: 'font-awesome';
    src: url('css/assets/fonts/glyphicons-halflings-regular.eot');
    src: url('fonts/Calibri.eot?#iefix') format('embedded-opentype'),
        url('css/assets/fonts/fontweawesome-webfont.woff') format('woff'),
        url('css/assets/fonts/fontweawesome-webfont.ttf') format('ttf'),
        url('css/assets/fonts/fontweawesome-webfont.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}
</style>
<link href="{{asset('bootstrap/css/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('bootstrap/css/assets/css/font-awesome.min.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Yummy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('bootstrap/css/template_novo_css/style.css')}}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('bootstrap/css/nav-justified.css')}}" rel="stylesheet">
<link href="{{asset('bootstrap/css/lightbox.css')}}" rel="stylesheet">
<link href="{{asset('bootstrap/css/animate.css')}}" rel="stylesheet">


</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 class="navbar-brand"><a  href="#">L & C</a></h1>
				</div>
				<!--navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-4">
								<div class="row">
									<div class="col-sm-3">
										<h4>Categorias</h4>
										<ul class="multi-column-dropdown">
										@foreach ($listcategorias as $cat)
                                        @if($cat->id)
										 <li>
                                            <a href="{{route('categoria.listar', $cat->id)}}">
                                            {{$cat->nome}}
                                            </a>
                                        </li>
                                        @endif
                                        @endforeach
										</ul>
									</div>												
								</div>
							</ul>
						</li>
					   <li class="dropdown grid">
							<a href="{{url('getmesa/'.\Session::get('id_mesa'))}}" class="dropdown-toggle list1">Voltar ao Cardápio</a>
						</li>
						@if (session('cliente')  != '')
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha Conta<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-4">
								<div class="row">
									<div class="col-sm-3">
										<h4>Meus Pedidos</h4>
										<ul class="multi-column-dropdown">
										 	<li>
                                            	<a href="{{route('cliente.pedidos')}}">
                                            		Todos os pedidos
                                            	</a>
                                        	</li>
                                        	<li>
                                            	<a href="{{route('cliente.pedidos', '?status=nao-pagos')}}">
                                            		Pedidos Pendentes de Pagamento
                                            	</a>
                                        	</li>
                                        	<li>
                                            	<a href="{{route('cliente.pedidos', '?status=pagos')}}">
                                            		 Pedidos Pagos
                                            	</a>
                                        	</li>
                                        	<li>
                                            	<a href="{{route('cliente.pedidos', '?status=finalizados')}}">
                                            		 Pedidos Finalizados
                                            	</a>
                                        	</li>
										</ul>
									</div>
									<div class="col-sm-3">
										<h4>Painel de Controle</h4>
										<ul class="multi-column-dropdown">
										 	<li>
                                            	<a href="{{route('cliente.dashboard')}}">
                                            		Painel de Controle
                                            	</a>
                                        	</li>
										</ul>
									</div>
									<div class="col-sm-3">
										<h4>Perfil</h4>
										<ul class="multi-column-dropdown">
										 	<li>
                                            	<a href="{{route('cliente.editar',\Session::get('id_cliente'))}}">
                                            		Editar Minhas Informações
                                            	</a>
                                        	</li>
										</ul>
									</div>	
									<div class="col-sm-3">
										<h4>Sair da conta</h4>
										<ul class="multi-column-dropdown">
										 	<li>
                                            	<a href="{{url('logout_cliente',\Session::get('id_cliente'))}}">
                                            		sair
                                            	</a>
                                        	</li>
										</ul>
									</div>												
								</div>
							</ul>
						</li>
						@endif												
					</ul> 
					<!--/.navbar-collapse-->
				</div>
				<!--//navbar-header-->
			</nav>
			<div class="header-info">
				@if((Route::getCurrentRoute()->getPath()) != 'produto/buscar')
					<div class="header-right search-box">
						<a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
						@if((Route::getCurrentRoute()->getPath()) == 'getmesa/{id}')
						<div class="search">
							<form action="{{route('produto.buscar')}}" class="navbar-form navbar-right navbar-form" method="GET"> 
								{!! Form::text('termo-pesquisa', null,['placeholder'=>'Pesquisar',
	            				'class'=>'form-control']) !!}
								<button type="submit" class="btn btn-default" aria-label="Left Align">
									Pesquisar
								</button>
							</form>
						</div>
						@endif
						@if((Route::getCurrentRoute()->getPath()) == 'categoria/{id?}')
						<div class="search">
							<form action="{{route('produto.buscar')}}" class="navbar-form navbar-right navbar-form" method="GET"> 
								{!! Form::text('termo-pesquisa', null,['placeholder'=>'Pesquisar',
	            				'class'=>'form-control']) !!}
								<button type="submit" class="btn btn-default" aria-label="Left Align">
									Pesquisar
								</button>
							</form>
						</div>
						@endif	
					</div>
					<div class="header-right cart">
						<a data-toggle="modal" data-target="#carrinho_id" class="carrinho"><span class="glyphicon glyphicon-list-alt"></span></a>
					</div>
				@endif
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//header-->
		<script src="{{asset('bootstrap/js/template_novo_js/simpleCart.min.js')}}"> </script>
		<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/ie10-viewport-bug-workaround.js')}}"></script>
        <script src="{{asset('bootstrap/js/lightbox.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap-dropdownhover.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/script.js')}}"></script>
        <script src="{{asset('bootstrap/js/menu.js')}}"></script>
        <script src="{{asset('bootstrap/js/jquery-3.2.1.min.js')}}"></script>
</body>
</html>