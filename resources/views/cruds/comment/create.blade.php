@extends('layouts.app')
@section('title','Create')
@section('content')

<div class='container'>
  <div class='row'>
    <div class='col-md-10 col-md-offset-1'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='col-md-12'>
            <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("cruds.comment.store")}}' enctype='multipart/form-data'>
              {{ csrf_field() }}

              <!-- body -->
              <div class='form-group{{ $errors->has("body") ? " has-error" : "" }}'>
                <label for='body' class='col-md-4 control-label'>Comentário</label>
                <div class='col-md-6'>
                  <input id='body' type='text' class='form-control' name='body' placeholder='Título do tópico'>
                  @if ($errors->has("body"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("body") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- status -->
              <div class='form-group{{ $errors->has("status") ? " has-error" : "" }}'>
                <label for='status' class='col-md-4 control-label'>Status</label>
                <div class='col-md-6'>
                  <select class="form-control" id="status" name="status" >
                    <option value="Aberto">Aberto</option>
                    <option value="Encerrado">Encerrado</option>
                    <option value="Concluído">Concluído</option>
                  </select>

                  @if ($errors->has("status"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("status") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- active -->
              <div class='form-group{{ $errors->has("active") ? " has-error" : "" }}'>
                <label for='active' class='col-md-4 control-label'>Ativo?</label>
                <div class='col-md-6'>
                  <select class="form-control" id="active" name="active" >
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                  @if ($errors->has("active"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("active") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- user_id -->
              <div class='form-group{{ $errors->has("user_id") ? " has-error" : "" }}'>
                <label for='user_id' class='col-md-4 control-label'>Autor</label>
                <div class='col-md-6'>
                  <input id='user_id' type='text' class='form-control' name='user_id' placeholder='text/binary' value="{{ Auth::user()->id }}" readonly>
                  @if ($errors->has("user_id"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("user_id") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- topic_id -->
              <div class='form-group{{ $errors->has("topic_id") ? " has-error" : "" }}'>
                <label for='topic_id' class='col-md-4 control-label'>Tópico</label>
                <div class='col-md-6'>
                  <!-- <input id='topic_id' type='text' class='form-control' name='topic_id' placeholder='text/binary'> -->
                  <select id='topic_id' class='form-control' name='topic_id'>
                    @forelse($topics as $topic)
                    <option value="{{$topic->id}}">{{$topic->name}}</option>
                    @empty
                    <option value="">Nenhuma plataforma inserida</option>
                    @endforelse
                  </select>
                  @if ($errors->has("topic_id"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("topic_id") }}</strong>
                  </span>
                  @endif
                </div>
              </div>




              <div class='form-group'>
                <label for='' class='col-md-4 control-label'></label>
                <div class='col-md-6'>
                  <button class='btn btn-info'>Adicionar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
