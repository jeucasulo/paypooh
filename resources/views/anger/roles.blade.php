@extends('layouts.master')

@section('title', 'Roles')

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
              <h1>Perfis</h1>
              <!-- <span class="subheading">Gerencie suas plataformas</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>

<div>

      @forelse($roles as $role)

        <div id="" class="container">
        <div class="row">
            <div class="col-sm">
              {{$role->id}}
            </div>
            <div class="col-sm">
              <a href="{{route('anger.role',$role->id)}}">{{$role->name}}</a>
            </div>
            <div class="col-sm">
              {{$role->label}}
            </div>

              @empty
              Nenhum perfil cadastrado
        </div>
        </div>
      @endforelse

</div>

@endsection
