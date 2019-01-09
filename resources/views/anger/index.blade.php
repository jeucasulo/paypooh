@extends('layouts.master')

@section('title', 'Anger')

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
              <!-- <h1>Plataformas</h1> -->
              <!-- <span class="subheading">Gerencie suas plataformas</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>

<div class="container">


    <div class="row">
      <div class="col-md-12">

        <div class="row text-center">
          <div class="col-sm">

            <div class="card">
              <div class="card-header">
                Usuários
              </div>
              <div class="card-body">
                <h5 class="card-title">Gerenciar usuários</h5>
                <p class="card-text">Aqui você terá um panorama completo de sua coleção de tabelas.</p>
                <a href="{{route('anger.users')}}" class="btn btn-primary btn-block">Usuários</a>
              </div>
            </div>
          </div>


          <div class="col-sm">
            <div class="card">
              <div class="card-header">
                Perfis
              </div>
              <div class="card-body">
                <h5 class="card-title">Gerenciamento de perfis</h5>
                <p class="card-text">Edite suas tabelas de acordo com suas colunas e especificidades.</p>
                <a href="{{route('anger.roles')}}" class="btn btn-primary btn-block">Perfis</a>
              </div>
            </div>
          </div>


          <div class="col-sm">
            <div class="card">
              <div class="card-header">
                Permissões
              </div>
              <div class="card-body">
                <h5 class="card-title">Criação e edição</h5>
                <p class="card-text">Crie e edite novos perfis e permissões a serem atribuídos aos usuários.</p>
                <a href="{{route('anger.permissions')}}" class="btn btn-primary btn-block">Permissões</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

</div>
@endsection
