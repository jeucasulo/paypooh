@extends('layouts.master')

@section('title', 'Role')
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
              <!-- <h1>Perfis</h1> -->
              <!-- <span class="subheading">Gerencie suas plataformas</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>


<div>
    <div id="" class="container">
    <div class="row">
        <div class="col-sm">
          {{$role->id}}
        </div>
        <div class="col-sm">
          <a href="">{{$role->name}}</a>
        </div>
        <div class="col-sm">
          {{$role->label}}
        </div>
    </div>
    </div>
</div>

<hr>
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col text-center">
      <h1 class="text-muted text-center">Permissões</h1>
      @forelse($role->permissions as $permission)
        <span id="userPermissions{{$permission->id}}" class="badge badge-primary">{{$permission->label}}</span>
        @empty
        Nenhum registro encontrado
      @endforelse
    </div>
  </div>
</div>
<hr>

<div id="" class="container">
  <div id="" class="row">

      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Adicionar</h3>
       <form id='addRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.role-permission-attach")}}' enctype='multipart/form-data'>
         {{ csrf_field() }}

          <input type="text" name="role_id" value="{{$role->id}}" hidden="hidden">
          <select id="add_permission_id" name="add_permission_id" class="form-control">
            @forelse($permissions  as $permission)
              <option  id="allPermissions{{$permission->id}}" value="{{$permission->id}}">{{$permission->label}}</option>
              @empty
              Nenhum registro encontrado
            @endforelse
          </select>
          <button class="btn btn-success">Adicionar</button>
        </form>
      </div>

      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Remover</h3>
       <form id='removeRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.role-permission-detach")}}' enctype='multipart/form-data'>
         {{ csrf_field() }}

          <input type="text" name="role_id" value="{{$role->id}}" hidden="hidden">
          <select id="detach_permission_id" name="detach_permission_id" class="form-control">
              @forelse($role->permissions as $permission)

              <option value="{{$permission->id}}">{{$permission->label}}</option>
              @empty
              <option>Nenhum registro encontrado</option>
            @endforelse
          </select>
          <button class="btn btn-danger">Remover</button>
        </form>

      </div>
  </div>
</div>
@endsection

<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
  $(document).ready(function(){
    Role.RemoveEqualPermissions();
  });
  var Role = {
    RemoveEqualPermissions:function(){
      for(i = 0; i < 50; i++){
          var inner = $("#userPermissions"+i+"").html();
          var out = $("#allPermissions"+i+"").html();
          if(inner != null){
              if(inner = out){
                  $("#allPermissions"+i+"").remove();
              }
          }
      }
    }
  }
</script>
