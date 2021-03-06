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
            <form id='updateForm' class='form-horizontal' role='form' method='POST' action='{{route('cruds.platform.img-store')}}' enctype='multipart/form-data'>

              {{ csrf_field() }}


              <!-- id -->
              <div class='form-group{{ $errors->has("id") ? " has-error" : "" }}'>
                <label for='id' class='col-md-4 control-label'>Id:</label>
                <div class='col-md-6'>
                  <input id='id' type='text' class='form-control' name='id' placeholder='Nome da plataforma' value="{{$platform->id}}" readonly>
                </div>
              </div>

              <!-- name -->
              <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
                <label for='name' class='col-md-4 control-label'>Name</label>
                <div class='col-md-6'>
                  <input id='name' type='text' class='form-control' name='name' placeholder='Nome da plataforma' value="{{$platform->name}}" readonly>
                </div>
              </div>

              <!-- current img -->
              <div class='form-group'>
                <label for='img' class='col-md-4 control-label'>Imagem atual</label>
                <div class='col-md-6'>
                  <img src="/img/plataformas/{{$platform->img}}" alt="" width="150" height="150" class="img-thumbnail">
                </div>
              </div>


              <!-- img -->
              <div class='form-group{{ $errors->has("img") ? " has-error" : "" }}'>
                <label for='img' class='col-md-4 control-label'>Imagem</label>
                <div class='col-md-6'>
                  <input id='img' type='file' class='form-control' name='img' placeholder='Link da imagem da plataforma'>

                  <!-- <a href='{{route('cruds.platform.img-store')}}' class='btn btn-info'>Atualizar imagem</a> -->
                  @if ($errors->has("img"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("img") }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <div class='form-group{{ $errors->has("label") ? " has-error" : "" }}'>
                <div class='col-md-6'>
                  <!-- <a href='{{route('cruds.platform.update',$id)}}' class='btn btn-info'>Atualizar</a> -->
                  <button type="submit"  href='{{route('cruds.platform.img-store')}}' class='btn btn-info'>Atualizar imagem</button>
                  <a href='{{route('cruds.platform.edit',$platform->id)}}' class='btn btn-warning'>Voltar</a>

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
