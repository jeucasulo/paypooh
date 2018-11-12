@extends('anger.master',['jsFile'=>$asset.'js/index.js','cssFile'=>$asset.'css/index.css'])

@section('title', 'User')

@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')
    @parent
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col">
      <h1 class="text-muted text-center">Usuário</h1>
    </div>
  </div>
</div>
<hr>


<div>
    <div id="" class="container">
    <div class="row">
        <div class="col-sm">
          {{$user->id}}
        </div>
        <div class="col-sm">
          <a href="">{{$user->name}}</a>
        </div>
        <div class="col-sm">
          {{$user->email}}
        </div>
    </div>
    </div>
</div>

<hr>

<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col text-center">
      <h1 class="text-muted text-center">Perfis</h1>
      @forelse($roles as $role)

        <span id="userRolesTest{{$role->id}}" class="badge

                @if($user->hasRole($role))
                  badge-info
                  @else
                  badge-danger
                @endif


          ">{{$role->label}}</span>

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
       <form id='addRoleF' class='form-horizontal' role='form' method='POST' action='{{route("anger.user-role-attach")}}' enctype='multipart/form-data'>
         {{ csrf_field() }}

          <input type="text" name="user_id" value="{{$user->id}}" hidden="hidden">
          <select id="add_role_id" name="add_role_id" class="form-control">
            @forelse($roles  as $role)
              @if(!$user->hasRole($role))
              <option  id="allRoles{{$role->id}}" value="{{$role->id}}">{{$role->label}}</option>
                @else
              <option  id="allRoles{{$role->id}}" value="{{$role->id}}" disabled="">{{$role->label}}</option>
              @endif

              @empty
              <option>Nenhum registro encontrado</option>
            @endforelse
          </select>
          <button type="submit" class="btn btn-success">Adicionar</button>
        </form>
      </div>

      <div id="" class="col-sm">
        <h3 class="text-muted text-center">Remover</h3>
       <form id='removeRole' class='form-horizontal' role='form' method='POST' action='{{route("anger.user-role-detach")}}' enctype='multipart/form-data'>
         {{ csrf_field() }}

          <input type="text" name="user_id" value="{{$user->id}}" hidden="hidden">
          <select id="detach_role_id" name="detach_role_id" class="form-control">
              @forelse($roles as $role)

              @if(!$user->hasRole($role))
              <option  id="allRoles{{$role->id}}" value="{{$role->id}}" disabled="">{{$role->label}}</option>
                @else
              <option  id="allRoles{{$role->id}}" value="{{$role->id}}">{{$role->label}}</option>
              @endif

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
