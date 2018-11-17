@extends('layouts.app')
@section('title','Show')
@section('content')

<div class='container'>
  <div class='row'>
    <div class='col-md-10 col-md-offset-1'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='col-md-12'>
            <!-- 'body', 'status', 'active', 'user_id','topic_id' -->

            <!-- id -->
            <div class='form-group'>
              <label for='id' class='col-md-4 control-label'>Id</label>
              <div class='col-md-6'>
                <label id='id' type='number' class='form-control' name='id'>{{$comment->id}}<label>
                </div>
              </div>

              <!-- name -->
              <div class='form-group'>
                <label for='body' class='col-md-4 control-label'>Autor</label>
                <div class='col-md-6'>
                  <label id='body' type='number' class='form-control' name='body'>{{$comment->body}}<label>
                  </div>
                </div>


              <!-- status -->
              <div class='form-group'>
                <label for='status' class='col-md-4 control-label'>Status</label>
                <div class='col-md-6'>
                  <label id='status' type='number' class='form-control' name='status'>{{$comment->status}}<label>
                  </div>
                </div>

              <!-- active -->
              <div class='form-group'>
                <label for='active' class='col-md-4 control-label'>Ativo?</label>
                <div class='col-md-6'>
                  <label id='active' type='number' class='form-control' name='active'>{{$comment->active}}<label>
                  </div>
                </div>


            <!-- user_id -->
            <div class='form-group'>
              <label for='user_id' class='col-md-4 control-label'>Autor</label>
              <div class='col-md-6'>
                <label id='user_id' type='number' class='form-control' name='user_id'>{{$comment->user->name}}<label>
                </div>
              </div>

              <!-- topic_id -->
              <div class='form-group'>
                <label for='topic_id' class='col-md-4 control-label'>Plataforma</label>
                <div class='col-md-6'>
                  <label id='topic_id' type='number' class='form-control' name='topic_id'>{{$comment->user->name}}<label>
                  </div>
                </div>




            <div class='form-group'>
              <label for='' class='col-md-4 control-label'></label>
              <div class='col-md-6'>
                <a href='{{route('cruds.comment.index')}}' class='btn btn-info'>Voltar</a>
                <br><br>
                <a href='{{route('cruds.comment.show',$previous)}}' class='glyphicon glyphicon-chevron-left'><</a>
                <span class='badge'>{{$id}}</span>
                <a href='{{route('cruds.comment.show',$next)}}' class='glyphicon glyphicon-chevron-right'>></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
