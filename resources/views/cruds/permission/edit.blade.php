@extends('layouts.app')
@section('title','Edit')
@section('content')

 <div class='container'>
 <div class='row'>
 <div class='col-md-10 col-md-offset-1'>
 <div class='panel panel-default'>
 <div class='panel-body'>
 <div class='col-md-12'>
 <form id='updateForm' class='form-horizontal' role='form' method='POST' action='{{route('cruds.permission.update', $permission->id)}}' enctype='multipart/form-data'>
 <input type='hidden' name='_method' value='put'>
 {{ csrf_field() }}
 <!-- --------------------------------name-------------------------------- -->
 <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
 	<label for='name' class='col-md-4 control-label'>Name</label>
 	<div class='col-md-6'>
 		<!-- <label id='name' type='text' class='form-control' name='name'>{{$permission->name}}<label> -->
    <input id='name' type='text' class='form-control' name='name' placeholder='text/string' value="{{$permission->name}}">
 		@if ($errors->has("name"))
 			<span class='help-block text-danger'>
 				 <strong>{{ $errors->first("name") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>
 <!-- --------------------------------/name-------------------------------- -->
 <!-- --------------------------------label-------------------------------- -->
 <div class='form-group{{ $errors->has("label") ? " has-error" : "" }}'>
 	<label for='label' class='col-md-4 control-label'>Label</label>
 	<div class='col-md-6'>
    <input id='label' type='text' class='form-control' name='label' placeholder='text/binary' value='{{$permission->label}}'>

 		@if ($errors->has("label"))
 			<span class='help-block text-danger'>
 				 <strong>{{ $errors->first("label") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>
 <!-- --------------------------------/label-------------------------------- -->
 <div class='form-group{{ $errors->has("label") ? " has-error" : "" }}'>
   <div class='col-md-6'>
      <!-- <a href='{{route('cruds.permission.update',$id)}}' class='btn btn-info'>Atualizar</a> -->
      <button type="submit"  href='{{route('cruds.permission.update',$id)}}' class='btn btn-info'>Atualizar</button>
   </div>
 </div>



</form>
 <div class='form-group'>
 <label for='' class='col-md-4 control-label'></label>
 <div class='col-md-6'>
 <a href='{{route('cruds.permission.index')}}' class='btn btn-info'>Voltar</a>
 <br><br>

 <span class='badge'>{{$id}}</span>

 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 @endsection
