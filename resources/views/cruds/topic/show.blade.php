@extends('layouts.app')
@section('title','Show')
@section('content')

<div class='container'>
  <div class='row'>
    <div class='col-md-10 col-md-offset-1'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='col-md-12'>

            <!-- id -->
            <div class='form-group'>
              <label for='id' class='col-md-4 control-label'>Id</label>
              <div class='col-md-6'>
                <label id='id' type='number' class='form-control' name='id'>{{$topic->id}}<label>
                </div>
              </div>

              <!-- name -->
              <div class='form-group'>
                <label for='name' class='col-md-4 control-label'>Autor</label>
                <div class='col-md-6'>
                  <label id='name' type='number' class='form-control' name='name'>{{$topic->name}}<label>
                  </div>
                </div>

                <!-- info -->
                <div class='form-group'>
                  <label for='info' class='col-md-4 control-label'>Artigo</label>
                  <div class='col-md-6'>
                    <label id='info' type='number' class='form-control' name='info'>{{$topic->info}}<label>
                    </div>
                  </div>

                  <!-- status -->
                  <div class='form-group'>
                    <label for='status' class='col-md-4 control-label'>Status</label>
                    <div class='col-md-6'>
                      <label id='status' type='number' class='form-control' name='status'>{{$topic->status}}<label>
                      </div>
                    </div>

                    <!-- active -->
                    <div class='form-group'>
                      <label for='active' class='col-md-4 control-label'>Ativo?</label>
                      <div class='col-md-6'>
                        <label id='active' type='number' class='form-control' name='active'>{{$topic->active}}<label>
                        </div>
                      </div>

                      <!-- platform_id -->
                      <div class='form-group'>
                        <label for='platform_id' class='col-md-4 control-label'>Plataforma</label>
                        <div class='col-md-6'>
                          <label id='platform_id' type='number' class='form-control' name='platform_id'>{{$topic->platform->name}}<label>
                          </div>
                        </div>

                        <!-- user_id -->
                        <div class='form-group'>
                          <label for='user_id' class='col-md-4 control-label'>Autor</label>
                          <div class='col-md-6'>
                            <label id='user_id' type='number' class='form-control' name='user_id'>{{$topic->user->name}}<label>
                            </div>
                          </div>



                          <div class='form-group'>
                            <label for='' class='col-md-4 control-label'></label>
                            <div class='col-md-6'>
                              <a href='{{route('cruds.topic.index')}}' class='btn btn-info'>Voltar</a>
                              <br><br>
                              <a href='{{route('cruds.topic.show',$previous)}}' class='glyphicon glyphicon-chevron-left'><</a>
                              <span class='badge'>{{$id}}</span>
                              <a href='{{route('cruds.topic.show',$next)}}' class='glyphicon glyphicon-chevron-right'>></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
