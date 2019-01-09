@extends('layouts.master')

@section('title', 'Users')

@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')



@section('content')
    @parent
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/nikita-kachanovsky-445394-unsplash.jpg')}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Usuários</h1>
              <!-- <span class="subheading">Gerencie suas plataformas</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>


<div>
    @forelse($users as $user)

      <div id="" class="container">
        <div class="row">
            <div class="col-sm offset-md-4">
              <div class="row">

                <div class="col-sm-2">
                <h6>{{$user->id}}</h6>
                </div>
                <div class="col-sm-2">
                  <h6>
                    <a href="{{route('anger.user',$user->id)}}">{{$user->name}}</a>
                  </h6>
                </div>
                <div class="col-sm-2">

                  <h6>{{$user->email}}</h6>

                </div>
              </div>
            </div>


              @empty
              Nenhum usuário cadastrado
        </div>
      </div>
    @endforelse
</div>

@endsection
