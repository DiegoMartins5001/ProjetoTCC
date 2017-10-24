@extends('layouts.frente-loja')

@section('conteudo')

@if(\Session::has('erro'))
<div class='container'>
    <div class='alert alert-danger text-center'>
        {{\Session::get('erro')}}
    </div>
</div>
@endif


<div class="col-md-6 col-md-offset-4">
    <div class="panel panel-success">
        <div class="panel-heading">Entre com sua identificação para finalizar compras e acessar seus pedidos</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{url('/login')}}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Senha</label>

                    <div class="col-md-8">
                        <input type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!--<div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Lembrar meu login
                            </label>
                        </div>
                    </div>
                </div>-->

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i>Entrar
                        </button>

                        <!--<a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu sua senha?</a>-->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection