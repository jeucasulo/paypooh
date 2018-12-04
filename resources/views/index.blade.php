@extends('layouts.master')

@section('content')

    <!-- Page Header -->
    <!-- <header class="masthead" style="background-image: url('img/home-bg.jpg')"> -->
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

    <!-- vertical -->
    <div class="container">
      <div class="row">
        <h1 class="h1 text-muted mx-auto text-center">Plataformas</h1>
      </div>
      <div class="row mx-auto">
        @forelse($platforms as $platform)
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
              <a href="{{route('show',$platform->id)}}" target="_blank">
                <img class="card-img-top" src="/img/plataformas/{{$platform->img}}" alt="Card image cap" width="300" height="200">
              </a>
              <div class="card-body d-none">
                <p class="card-text text-muted"><a href="#" class="btn btn-default">{{$platform->name}}</a></p>
              </div>
            </div>
          </div>
          @empty
          Nenhuma plataforma inserida
        @endforelse
      </div>
    </div>


    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Science has not yet mastered prophecy
              </h2>
              <h3 class="post-subtitle">
                We predict too much for the next year and yet far too little for the next ten.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Failure is not an option
              </h2>
              <h3 class="post-subtitle">
                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2018</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a id="btnTest" class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
    @endsection
