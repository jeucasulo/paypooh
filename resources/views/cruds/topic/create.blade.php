@extends('layouts.app')
@section('title','Create')
@section('content')

 <div class='container'>
 <div class='row'>
 <div class='col-md-10 col-md-offset-1'>
 <div class='panel panel-default'>
 <div class='panel-body'>
 <div class='col-md-12'>
 <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("cruds.topic.store")}}' enctype='multipart/form-data'>
 {{ csrf_field() }}

 <!-- name -->
 <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
 	<label for='name' class='col-md-4 control-label'>Topico</label>
 	<div class='col-md-6'>
 		<input id='name' type='text' class='form-control' name='name' placeholder='Título do tópico'>
 		@if ($errors->has("name"))
 			<span class='help-block text-danger'>
 				 <strong>{{ $errors->first("name") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>

 <!-- info -->
 <div class='form-group{{ $errors->has("info") ? " has-error" : "" }}'>
 	<label for='info' class='col-md-4 control-label'>Artigo</label>
 	<div class='col-md-6'>
 		<input id='info' type='text' class='form-control' name='info' placeholder='Texto do tópico'>
 		@if ($errors->has("info"))
 			<span class='help-block text-danger'>
 				 <strong>{{ $errors->first("info") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>

 <!-- status -->
 <div class='form-group{{ $errors->has("status") ? " has-error" : "" }}'>
   <label for='status' class='col-md-4 control-label'>Status</label>
   <div class='col-md-6'>
     <!-- <input id='status' type='text' class='form-control' name='status' placeholder='text/binary'> -->
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
     <!-- <input id='active' type='text' class='form-control' name='active' placeholder='text/binary'> -->
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

  <!-- platform_id -->
 <div class='form-group{{ $errors->has("platform_id") ? " has-error" : "" }}'>
   <label for='platform_id' class='col-md-4 control-label'>Plataforma</label>
   <div class='col-md-6'>
     <!-- <input id='platform_id' type='text' class='form-control' name='platform_id' placeholder='text/binary'> -->
     <select id='platform_id' class='form-control' name='platform_id'>
       @forelse($platforms as $platform)
       <option value="{{$platform->id}}">{{$platform->name}}</option>
        @empty
        <option value="">Nenhuma plataforma inserida</option>
       @endforelse
     </select>
     @if ($errors->has("platform_id"))
       <span class='help-block text-danger'>
          <strong>{{ $errors->first("platform_id") }}</strong>
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





 <div class='form-group'>
 <label for='' class='col-md-4 control-label'></label>
 <div class='col-md-6'>
 <button class='btn btn-info'>Adicionar</button>
 </div>
 </div>
 </form>
 @endsection
