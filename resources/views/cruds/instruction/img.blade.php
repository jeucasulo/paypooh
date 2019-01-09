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
            <form id='updateForm' class='form-horizontal' role='form' method='POST' action='{{route('cruds.instruction.img-store')}}' enctype='multipart/form-data'>

              {{ csrf_field() }}

              {{$instruction->platform->name}}
              <!-- platform_name -->
              <div class='form-group{{ $errors->has("platform_id") ? " has-error" : "" }}'>
                <label for='platform_id' class='col-md-4 control-label'>Plataforma</label>
                <div class='col-md-6'>
                  <input id='platform_name' type='text' class='form-control' name='platform_name' placeholder='text/binary' value="{{$instruction->platform->name}}" readonly>
                  @if ($errors->has("user_id"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("platform_id") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- platform name -->
              <div class='form-group{{ $errors->has("id") ? " has-error" : "" }}'>
                <label for='id' class='col-md-4 control-label'>Id da Plataforma</label>
                <div class='col-md-6'>
                  <input id='id' type='text' class='form-control' name='id' placeholder='Id' value="{{$instruction->id}}" readonly>
                </div>
              </div>



              <!-- platform name -->
              <div class='form-group{{ $errors->has("platform_id") ? " has-error" : "" }}'>
                <label for='platform_id' class='col-md-4 control-label'>Id da Plataforma</label>
                <div class='col-md-6'>
                  <input id='platform_id' type='text' class='form-control' name='platform_id' placeholder='Nome da plataforma' value="{{$instruction->platform_id}}" readonly>
                </div>
              </div>

              <!-- current img -->
              <div class='form-group'>
                <label for='' class='col-md-4 control-label'>Imagem atual</label>
                <div class='col-md-6'>
                  <img src="/img/instructions/{{$instruction->img}}" alt="" width="150" height="150" class="img-thumbnail">
                </div>
              </div>


              <!-- img -->
              <div class='form-group{{ $errors->has("img") ? " has-error" : "" }}'>
                <label for='img' class='col-md-4 control-label'>Alterar imagem</label>
                <div class='col-md-6'>
                  <input id='img' type='file' class='form-control' name='img' placeholder='Link da imagem da plataforma'>

                  <!-- <a href='{{route('cruds.instruction.img-store')}}' class='btn btn-info'>Atualizar imagem</a> -->
                  @if ($errors->has("img"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("img") }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <div class='form-group{{ $errors->has("label") ? " has-error" : "" }}'>
                <div class='col-md-6'>
                  <!-- <a href='{{route('cruds.instruction.update',$id)}}' class='btn btn-info'>Atualizar</a> -->
                  <button type="submit"  href='{{route('cruds.instruction.img-store')}}' class='btn btn-info'>Atualizar imagem</button>
                  <a href='{{route('cruds.instruction.edit',$instruction->id)}}' class='btn btn-warning'>Voltar</a>
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
