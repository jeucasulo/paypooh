@extends('layouts.app')
@section('title','Create')
@section('content')

 <div class='container'>
 <div class='row'>
 <div class='col-md-10 col-md-offset-1'>
 <div class='panel panel-default'>
 <div class='panel-body'>
 <div class='col-md-12'>
 <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("cruds.permission.store")}}' enctype='multipart/form-data'>
 {{ csrf_field() }}
 <!-- --------------------------------Name-------------------------------- -->
 <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
 	<label for='name' class='col-md-4 control-label'>Name</label>
 	<div class='col-md-6'>
 		<input id='name' type='text' class='form-control' name='name' placeholder='text/string'>
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
 		<input id='label' type='text' class='form-control' name='label' placeholder='text/binary'>
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
 <button class='btn btn-info'>Adicionar</button>
 </div>
 </div>
 </form>
 @endsection
