@if (isset($errors) && (count($errors) > 0))
<!-- mostra este bloco se existe uma chave na sessão chamada mensagem-erro -->
    <div style="margin-top:5px;" class='alert alert-danger'>
        <ul style='list-style:none;'>
            @foreach ($errors->all() as $error)
            <li style='margin-bottom:5px;' class='text-center' >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::has('mensagens-sucesso'))
    <!-- mostra este bloco se existe uma chave na sessão chamada mensagens-sucesso -->
    <div style="margin-top:5px;" class='alert alert-success'>
        @if (is_array(Session::get('mensagens-sucesso')))
            <ul>
            @foreach (Session::get('mensagens-sucesso') as $msg)
                <li>{{$msg}}</li>
            @endforeach
            </ul>
        @else
            {{Session::get('mensagens-sucesso')}}
        @endif
    </div>
@endif

@if (Session::has('mensagens-danger'))
    <!-- mostra este bloco se existe uma chave na sessão chamada mensagens-sucesso -->
    <div style="margin-top:5px;" class='alert alert-danger'>
        @if (is_array(Session::get('mensagens-danger')))
            <ul>
            @foreach (Session::get('mensagens-danger') as $msg)
                <li>{{$msg}}</li>
            @endforeach
            </ul>
        @else
            {{Session::get('mensagens-danger')}}
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

<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript">
$(document).ready (function(){
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        }); 
        $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-danger").slideUp(500);
        });   
 });
</script>

