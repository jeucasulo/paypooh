@extends('layouts.master')
@section('title','Index')
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


<!-- horizontal -->
<div class='container d-none'>
		<!-- <h1>All<small>(horizontal) <a href='{{route("cruds.platform.create")}}'>+</small></a></h1> -->
			@forelse($platforms as $platform)
    <div class='row'>
 			<div class='col'> <h6>{{$platform->id}}</h6></div>
 			<div class='col'> <h6>{{$platform->name}}</h6></div>
 			<div class='col'> <h6>{{$platform->label}}</h6></div>
 			<div class='col text-right'>
  			<a href='{{route('cruds.platform.show',$platform->id)}}' class='btn btn-info'>Ver mais</a>
  			<a href='{{route('cruds.platform.edit',$platform->id)}}' class='btn btn-success'>Editar</a>
  			<a href='#' class='btn btn-danger'>Remover</a>
			</div>
    </div>
    @empty
    Nenhuma plataforma inserida
			@endforelse
</div>

<div class="container">
<div class="row">
  <a href='{{route("cruds.platform.create")}}' class="btn btn-default">Adicionar uma nova plataforma</small></a>
</div>
</div>
<br>
<!-- vertical -->
<div class="container">
<div class="row mx-auto">
  @forelse($platforms as $platform)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card" style="width: 18rem;">
        <a href="{{route('cruds.platform.edit',$platform->id)}}">
          <img class="card-img-top" src="/img/plataformas/{{$platform->img}}" alt="Card image cap" width="300" height="200">
        </a>
        <div class="card-body d-none">
          <p class="card-text text-muted"><a href="#" class="btn btn-default">{{$platform->name}}</a></p>
        </div>
      </div>
      <!-- <a href="{{route('cruds.platform.edit',$platform->id)}}">
        <div class="d-block">
            <img class="img-thumbnail img-fluid" src="/img/plataformas/{{$platform->img}}" alt="Card image cap">
        </div>
      </a> -->
    </div>
    @empty
    Nenhuma plataforma inserida
  @endforelse
</div>
</div>

<style>
</style>


@endsection
