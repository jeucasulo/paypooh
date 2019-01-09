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
          <h1>Perfis e permissões</h1>
          <!-- <span class="subheading">Gerencie suas plataformas</span> -->
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container justify-content-center">
  <div class="row">
    <!--  -->
    <div class="col">
      <div class="row justify-content-center">
        @forelse($roles as $role)

            {{$role->name}}
            -
            {{$role->label}}

          <br>
          @empty
          Nenhum perfil encontrado
        @endforelse

      </div>
    </div>

    <!--  -->
    <div class="col">
      <div class="row justify-content-center">
        @forelse($permissions as $permission)

            {{$permission->name}}
            -
            {{$permission->label}}
          </br>
          @empty
          Nenhuma permissão encontrada
        @endforelse

      </div>
    </div>
    <!--  -->
  </div>
</div>
<hr>

<div class="container">
  <div class="row">

  </div>
</div>



@endsection
