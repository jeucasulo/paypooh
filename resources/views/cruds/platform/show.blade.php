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
                  <label id='id' type='number' class='form-control' name='id'>{{$platform->id}}<label>
                </div>
              </div>

              <!-- name -->
              <div class='form-group'>
                <label for='name' class='col-md-4 control-label'>Plataforma</label>
                <div class='col-md-6'>
                  <label id='name' type='number' class='form-control' name='name'>{{$platform->name}}<label>
                </div>
              </div>

              <!-- desc -->
              <div class='form-group'>
                <label for='desc' class='col-md-4 control-label'>Descrição</label>
                <div class='col-md-6'>
                  <label id='desc' class='form-control' name='desc'>{{$platform->desc}}<label>
                </div>
              </div>

              <!-- desc -->
              <div class='form-group'>
                <label for='integration' class='col-md-4 control-label'>Integração</label>
                <div class='col-md-6'>
                  <label id='integration' class='form-control' name='integration'>{{$platform->integration}}<label>
                </div>
              </div>

              <!-- desc -->
              <div class='form-group'>
                <label for='ec' class='col-md-4 control-label'>EC</label>
                <div class='col-md-6'>
                  <label id='ec' class='form-control' name='ec'>{{$platform->ec}}<label>
                </div>
              </div>


              <!-- desc -->
              <div class='form-group'>
                <label for='pp' class='col-md-4 control-label'>PP</label>
                <div class='col-md-6'>
                  <label id='pp' class='form-control' name='pp'>{{$platform->pp}}<label>
                </div>
              </div>


              <!-- desc -->
              <div class='form-group'>
                <label for='active' class='col-md-4 control-label'>Ativo?</label>
                <div class='col-md-6'>
                  <label id='active' class='form-control' name='active'>{{$platform->active}}<label>
                </div>
              </div>

              <!-- desc -->
              <div class='form-group'>
                <label for='details' class='col-md-4 control-label'>Detalhes</label>
                <div class='col-md-6'>
                  <label id='details' class='form-control' name='details'>{{$platform->details}}<label>
                </div>
              </div>

              <!-- desc -->
              <div class='form-group'>
                <label for='img' class='col-md-4 control-label'>Imagem</label>
                <div class='col-md-6'>
                  <label id='img' class='form-control' name='img'>{{$platform->img}}<label>
                  <img src="/img/{{$platform->img}}" alt="" width="300" height="300">
                </div>
              </div>

              <!-- desc -->
              <div class='form-group'>
                <label for='order' class='col-md-4 control-label'>Ordem</label>
                <div class='col-md-6'>
                  <label id='order' class='form-control' name='order'>{{$platform->order}}<label>
                </div>
              </div>















              <div class='form-group'>
                <label for='' class='col-md-4 control-label'></label>
                <div class='col-md-6'>
                  <a href='{{route('cruds.platform.index')}}' class='btn btn-info'>Voltar</a>
                  <br><br>
                  <a href='{{route('cruds.platform.show',$previous)}}' class='glyphicon glyphicon-chevron-left'><</a>
                  <span class='badge'>{{$id}}</span>
                  <a href='{{route('cruds.platform.show',$next)}}' class='glyphicon glyphicon-chevron-right'>></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
