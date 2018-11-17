

@extends('layouts.app')
@section('title','Index')
@section('content')

@if(Session::has('flash_message'))
  <div class='container'>
    <div class='alert {{Session::get("flash_message")["class"]}} alert-dismissible fade show text-center' platform='alert'>
      <strong>{{Session::get('flash_message')['title']}}</strong>
      {{Session::get('flash_message')['msg']}}
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;
        </span></button>
    </div>
  </div>
@endif

 <!-- horizontal -->

 <div class='container'>



 		<h1>All<small>(horizontal) <a href='{{route("cruds.platform.create")}}'>+</small></a></h1>

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
      Nenhum perfil inserido
 			@endforelse


 </div>
 <br><br><br>
 <!-- vertical -->


 @endsection
