@extends('layouts.app')
@section('title','Show')
@section('content')

 <div class='container'>
 <div class='row'>
 <div class='col-md-10 col-md-offset-1'>
 <div class='panel panel-default'>
 <div class='panel-body'>
 <div class='col-md-12'><!-- --------------------------------Id-------------------------------- -->
 <div class='form-group{{ $errors->has("id") ? " has-error" : "" }}'>
 	<label for='id' class='col-md-4 control-label'>Id</label>
 	<div class='col-md-6'>
 		<label id='id' type='number' class='form-control' name='id'>{{$role->id}}<label>
 		@if ($errors->has("id"))
 			<span class='help-block'>
 				 <strong>{{ $errors->first("id") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>
 <!-- --------------------------------/Id-------------------------------- -->
 <!-- --------------------------------Name-------------------------------- -->
 <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
 	<label for='name' class='col-md-4 control-label'>Name</label>
 	<div class='col-md-6'>
 		<label id='name' type='text' class='form-control' name='name'>{{$role->name}}<label>
 		@if ($errors->has("name"))
 			<span class='help-block'>
 				 <strong>{{ $errors->first("name") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>
 <!-- --------------------------------/Name-------------------------------- -->
 <!-- --------------------------------Label-------------------------------- -->
 <div class='form-group{{ $errors->has("label") ? " has-error" : "" }}'>
 	<label for='label' class='col-md-4 control-label'>Label</label>
 	<div class='col-md-6'>
 		<label id='label' type='text' class='form-control' name='label'>{{$role->label}}<label>
 		@if ($errors->has("label"))
 			<span class='help-block'>
 				 <strong>{{ $errors->first("label") }}</strong>
 			 </span>
 		@endif
 	</div>
 </div>
 <!-- --------------------------------/Label-------------------------------- -->

 <div class='form-group'>
 <label for='' class='col-md-4 control-label'></label>
 <div class='col-md-6'>
 <a href='{{route('cruds.perfil.index')}}' class='btn btn-info'>Voltar</a>
 <br><br>
 <a href='{{route('cruds.perfil.show',$previous)}}' class='glyphicon glyphicon-chevron-left'><</a>
 <span class='badge'>{{$id}}</span>
 <a href='{{route('cruds.perfil.show',$next)}}' class='glyphicon glyphicon-chevron-right'>></a>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 @endsection
