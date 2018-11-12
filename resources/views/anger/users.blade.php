@extends('anger.master',['jsFile'=>$asset.'js/index.js','cssFile'=>$asset.'css/index.css'])

@section('title', 'Users')


@section('content')
    @parent
<div id="" class="container">
  <div id="" class="row">
    <div id="" class="col">
      <h1 class="text-muted text-center">Usuários</h1>
    </div>
  </div>
</div>
<hr>


<div>
    @forelse($users as $user)

      <div id="" class="container">
        <div class="row">
            <div class="col-sm offset-md-4">
              <div class="row">

                <div class="col-sm-2">
                {{$user->id}}
                </div>
                <div class="col-sm-2">
                  <a href="{{route('anger.user',$user->id)}}">{{$user->name}}</a>
                </div>
                <div class="col-sm-2">
                  {{$user->email}}
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
