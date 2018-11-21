@extends('layouts.master')
@section('title','Edit')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset('img/rawpixel-600782-unsplash.jpg')}}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Plataformas</h1>
          <span class="subheading">Gerencie suas plataformas</span>
        </div>
      </div>
    </div>
  </div>
</header>


<div class='container'>
  <div class='row'>
    <div class='col-md-10 col-md-offset-1'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='col-md-12'>
            <form id='updateForm' class='form-horizontal' role='form' method='POST' action='{{route('cruds.instruction.update', $instruction->id)}}' enctype='multipart/form-data'>
              <input type='hidden' name='_method' value='put'>
              {{ csrf_field() }}


              <!--  -->
              <!-- platform_id -->
              <div class='form-group{{ $errors->has("platform_id") ? " has-error" : "" }}'>
                <label for='platform_id' class='col-md-4 control-label'>Plataforma</label>
                <div class='col-md-6'>
                  <input id='' type='text' class='form-control' name='' placeholder='text/binary' value="{{$instruction->platform->name}}" readonly>
                  @if ($errors->has("user_id"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("platform_id") }}</strong>
                  </span>
                  @endif
                </div>
              </div>



              <!-- title -->
              <div class='form-group{{ $errors->has("title") ? " has-error" : "" }}'>
                <label for='title' class='col-md-4 control-label'>Título</label>
                <div class='col-md-6'>
                  <input id='title' type='text' class='form-control' name='title' placeholder='Título da instrução' value="{{$instruction->title}}">
                  @if ($errors->has("title"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("title") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- body -->
              <div class='form-group{{ $errors->has("body") ? " has-error" : "" }}'>
                <label for='body' class='col-md-4 control-label'>Comentário</label>
                <div class='col-md-6'>
                  <input id='body' type='text' class='form-control' name='body' placeholder='Sobre a plataforma' value="{{$instruction->body}}">
                  @if ($errors->has("body"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("body") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class='form-group{{ $errors->has("img") ? " has-error" : "" }}'>
                <label for='img' class='col-md-4 control-label'>Imagem</label>
                <div class='col-md-6'>
                  <div>
                    <label for='img' class='form-control'>{{$instruction->img}}<label>
                    </div>
                    <input id='img' type='hidden' class='form-control' name='img' placeholder='Link da imagem da plataforma' value="{{$instruction->img}}" readonly>
                    <a href='{{route('cruds.instruction.img',$instruction->id)}}' class='btn btn-info'>
                      <img src="/img/instructions/{{$instruction->img}}" alt="" width="300" height="300" class="img-thumbnail">
                    </a>
                    @if ($errors->has("img"))
                    <span class='help-block text-danger'>
                      <strong>{{ $errors->first("img") }}</strong>
                    </span>
                    @endif
                  </div>
                </div>



                <!-- order -->
                <div class='form-group{{ $errors->has("order") ? " has-error" : "" }}'>
                  <label for='order' class='col-md-4 control-label'>Ordem</label>
                  <div class='col-md-6'>
                    <input id='order' type='number' class='form-control' name='order' placeholder='Numero de ordem de exibição' step='10' min='0' max='1000' value="{{$instruction->order}}">
                    @if ($errors->has("order"))
                    <span class='help-block text-danger'>
                      <strong>{{ $errors->first("order") }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <!-- active -->
                <div class='form-group{{ $errors->has("active") ? " has-error" : "" }}'>
                  <label for='active' class='col-md-4 control-label'>Ativo?</label>
                  <div class='col-md-6'>
                    <!-- <input id='active' type='text' class='form-control' name='active' placeholder='Plataforma ativa?'> -->
                    <select class="form-control" id="active" name="active" >
                      <option value="Sim" {{$instruction->active == 'Sim'? "selected" : "" }}>Sim</option>
                      <option value="Não" {{$instruction->active == 'Não'? "selected" : "" }}>Não</option>
                    </select>
                    @if ($errors->has("active"))
                    <span class='help-block text-danger'>
                      <strong>{{ $errors->first("active") }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <!-- status -->
                <div class='form-group{{ $errors->has("status") ? " has-error" : "" }}'>
                  <label for='status' class='col-md-4 control-label'>Status</label>
                  <div class='col-md-6'>
                    <!-- <input id='status' type='text' class='form-control' name='status' placeholder='Plataforma ativa?'> -->
                    <select class="form-control" id="status" name="status" >
                      <option value="Sim" {{$instruction->status == 'Sim'? "selected" : "" }}>Sim</option>
                      <option value="Não" {{$instruction->status == 'Sim'? "selected" : "" }}>Não</option>
                    </select>
                    @if ($errors->has("status"))
                    <span class='help-block text-danger'>
                      <strong>{{ $errors->first("status") }}</strong>
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


                <!-- platform_id -->
                <div class='form-group{{ $errors->has("platform_id") ? " has-error" : "" }}'>
                  <label for='platform_id' class='col-md-4 control-label'>Id da plataforma</label>
                  <div class='col-md-6'>
                    <input id='platform_id' type='text' class='form-control' name='platform_id' placeholder='text/binary' value="{{$instruction->platform_id}}" readonly>
                    @if ($errors->has("user_id"))
                    <span class='help-block text-danger'>
                      <strong>{{ $errors->first("platform_id") }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <!--  -->
                <div class='form-group{{ $errors->has("label") ? " has-error" : "" }}'>
                  <div class='col-md-6'>
                    <!-- <a href='{{route('cruds.instruction.update',$id)}}' class='btn btn-info'>Atualizar</a> -->
                    <button type="submit"  href='{{route('cruds.instruction.update',$id)}}' class='btn btn-info'>Atualizar</button>
                    <a href='{{route('cruds.instruction.index')}}' class='btn btn-warning'>Voltar</a>

                  </div>
                </div>



              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
