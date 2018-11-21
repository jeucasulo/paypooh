@extends('layouts.master')
@section('title','Index')
@section('content')

@if(Session::has('flash_message'))
<div class='container'>
  <div class='alert {{Session::get("flash_message")["class"]}} alert-dismissible fade show text-center' instruction='alert'>
    <strong>{{Session::get('flash_message')['title']}}</strong>
    {{Session::get('flash_message')['msg']}}
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;
      </span></button>
  </div>
</div>
@endif

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


<!-- vertical -->
<div class="container">
<div class="row mx-auto">
  @forelse($platforms as $platform)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card" style="width: 18rem;">
        <a href="{{route('cruds.instruction.show',$platform->id)}}">
          <img class="card-img-top" src="/img/plataformas/{{$platform->img}}" alt="Card image cap" width="300" height="200">
        </a>
        <div class="card-body d-none">
          <p class="card-text text-muted"><a href="#" class="btn btn-default">{{$platform->name}}</a></p>
        </div>
      </div>
    </div>
    @empty
    Nenhuma plataforma inserida
  @endforelse
</div>
</div>

@endsection
