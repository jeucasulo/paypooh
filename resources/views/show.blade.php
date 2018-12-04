@extends('layouts.master')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/rawpixel-645294-unsplash.jpg')}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>PayPal</h1>
              <span class="subheading">Minha integração está morta</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="text-center">
          <div class="row">
            <h1 class="h1 text-muted">Instruções</h1>
          </div>

          @forelse($platform->instructions as $instruction)
          <div class="row">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$instruction->order+1}}.{{$instruction->title}}</h5>
                  <p class="card-text">{{$instruction->body}}</p>
                  <p class="card-text"><small class="text-muted">{{$instruction->updated_at}}</small></p>
                </div>
                <img class="card-img-bottom" src="/img/instructions/{{$instruction->img}}" alt="Card image cap" height="400">
              </div>
            </div>
            <br>
              @empty
              <h6 class="h6"> Esta plataforma não possui instruções inseridas</h6>



          @endforelse


      </div>
    </div>

    <hr>
    @endsection
