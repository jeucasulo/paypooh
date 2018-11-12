@extends('anger.master')

@section('title', 'Roles')

@section('jsFile', asset("").'js/index.js')
@section('cssFile', asset("").'css/index.css')


@section('content')



<!-- crud message -->
@if(Session::has('flash_message'))<div class='container'><div class='alert {{Session::get("flash_message")["class"]}} alert-dismissible fade show text-center' role='alert'><strong>{{Session::get('flash_message')['title']}}</strong> {{Session::get('flash_message')['msg']}}<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div></div>@endif

    @parent
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col-12-xs">
      <h1 class="text-danger text-center">Perfis</h1>
    </div>
  </div>
</div>

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
