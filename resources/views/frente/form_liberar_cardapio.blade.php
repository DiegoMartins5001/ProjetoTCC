@extends('layouts.frente-loja')

@section('conteudo')
@if (Session::has('mensagens-danger-centro'))
    <!-- mostra este bloco se existe uma chave na sessão chamada mensagens-sucesso -->
    <div style="margin-top:5px;" class='alert alert-danger container'>
        @if (is_array(Session::get('mensagens-danger-centro')))
            <ul>
            @foreach (Session::get('mensagens-danger-centro') as $msg)
                <li>{{$msg}}</li>
            @endforeach
            </ul>
        @else
            {{Session::get('mensagens-danger-centro')}}
        @endif
    </div>
@endif
@if (Session::has('mensagens-sucesso-centro'))
    <!-- mostra este bloco se existe uma chave na sessão chamada mensagens-sucesso -->
    <div style="margin-top:5px;" class='alert alert-success container'>
        @if (is_array(Session::get('mensagens-sucesso-centro')))
            <ul>
            @foreach (Session::get('mensagens-sucesso-centro') as $msg)
                <li>{{$msg}}</li>
            @endforeach
            </ul>
        @else
            {{Session::get('mensagens-sucesso-centro')}}
        @endif
    </div>
@endif
<div class="col-lg-8 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 ">
    <div class="panel panel-success">
        <div class="panel-heading">Liberar Cardápio</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{route('reservar.numero.form.post')}}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Número Da Mesa</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="numero" value="{{ old('numero') }}">

                        @if ($errors->has('numero'))
                        <span class="help-block">
                            <strong>{{ $errors->first('numero') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i>Liberar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript">
$(document).ready (function(){
        $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-danger").slideUp(500);
        });
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });    
 });
</script>


@endsection
