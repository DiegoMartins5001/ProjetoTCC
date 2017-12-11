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
</style>
    <div class="container">
        <div style="margin-top:30px;" class="panel panel-info">
            <div class="panel-heading"><strong>Editar minhas informações</strong></div>
            <div class="panel-body">
                <div class='container'>
                    <div class='col-lg-9 col-md-9 col-sm-10'>
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {!! csrf_field() !!}
                              <div class='form-group'>
                              </div>
                              <div class='form-group'>
                                  <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                    <label class="control-label">Nome</label>

                                    <input type="text" class="form-control" name="nome" value="{{$cliente->name}}">

                                    @if ($errors->has('nome'))
                                        <strong class='text-danger'>{{ $errors->first('nome') }}</strong>
                                    @endif
                                  </div>
                              </div>
                              <div class='form-group'>
                                  <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                                    <label class="control-label">Endereço</label>

                                    <input type="text" class="form-control" name="endereco" value="{{$cliente->endereco}}">
                                    @if ($errors->has('endereco'))
                                        <strong class='text-danger'>{{ $errors->first('endereco') }}</strong>
                                    @endif
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-info">
                                          Salvar
                                      </button>
                                  </div>
                              </div>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>