@extends('layouts.master')
@section('title','Show')
@section('content')

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

<!-- <div class='container'> -->
  <div class='row'>
    <div class='col-md-4'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='col-md-12'>
            <!-- name -->
            <div class='form-group'>
              <label for='name' class='col-md-4 control-label'>Plataforma</label>
              <div class='col-md-6'>
                <label id='name' class='form-control' name='name'>{{$platform->name}}<label>
              </div>
            </div>
            <!-- desc -->
            <div class='form-group'>
              <label for='desc' class='col-md-4 control-label'>Descrição</label>
              <div class='col-md-6'>
                <label id='desc' class='form-control' name='desc'>{{$platform->desc}}<label>
              </div>
            </div>
            <!-- integration -->
            <div class='form-group'>
              <label for='integration' class='col-md-4 control-label'>Integração</label>
              <div class='col-md-6'>
                <label id='integration' class='form-control' name='integration'>{{$platform->integration}}<label>
              </div>
            </div>
            <!-- details -->
            <div class='form-group'>
              <label for='details' class='col-md-4 control-label'>Observações</label>
              <div class='col-md-6'>
                <label id='details' class='form-control' name='details'>{{$platform->details}}<label>
              </div>
            </div>
            <!-- details -->
            <div class='form-group'>
              <label for='img' class='col-md-4 control-label'></label>
              <div class='col-md-6'>
                <img src="/img/plataformas/{{$platform->img}}" id='img' class='img-fluid' name='img'/>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>


    <div class="col-md-8">

      <div class="text-center">
          <div class="row">
            <h1 class="h1">Instruções</h1>
          </div>
          <div class="row">
            <p>
              <a href="{{route('cruds.instruction.create',$platform->id)}}">Adicionar</a>
            </p>
          </div>
          <div class="row">
            @forelse($platform->instructions as $instruction)



              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$instruction->title}}</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <img class="card-img-bottom" src="/img/instructions/{{$instruction->img}}" alt="Card image cap" height="500">
                <div class="">
                  <a href="{{route('cruds.instruction.edit',$instruction->id)}}" class="btn btn-default">Editar</a>
                </div>
              </div>

<br>
<br>
<br>


              @empty
              <h6 class="h6"> Esta plataforma não possui instruções inseridas</h6>
            @endforelse

          </div>

      </div>



    </div>



  </div>
</div>
@endsection
