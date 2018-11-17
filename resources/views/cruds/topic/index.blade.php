

@extends('layouts.app')
@section('title','Index')
@section('content')

@if(Session::has('flash_message'))
  <div class='container'>
    <div class='alert {{Session::get("flash_message")["class"]}} alert-dismissible fade show text-center' topic='alert'>
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



 		<h1>All<small>(horizontal) <a href='{{route("cruds.topic.create")}}'>+</small></a></h1>

 			@forelse($topics as $topic)
      <div class='row'>
   			<div class='col'> <h6>{{$topic->id}}</h6></div>
   			<div class='col'> <h6>{{$topic->name}}</h6></div>
   			<div class='col'> <h6>{{$topic->label}}</h6></div>
   			<div class='col text-right'>
    			<a href='{{route('cruds.topic.show',$topic->id)}}' class='btn btn-info'>Ver mais</a>
    			<a href='{{route('cruds.topic.edit',$topic->id)}}' class='btn btn-success'>Editar</a>
    			<a href='#' class='btn btn-danger'>Remover</a>
  			</div>
      </div>

      @empty
      Nenhum topic inserido
 			@endforelse


 </div>
 <br><br><br>
 <!-- vertical -->


 @endsection
