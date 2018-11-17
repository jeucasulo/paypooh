  @extends('layouts.master')

  @section('content')

      <!-- Page Header -->
      <header class="masthead" style="background-image: url('img/rawpixel-600782-unsplash.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="site-heading">
                <h1>Painel de Controle</h1>
                <span class="subheading">Gerencie usuários, plataformas e tutoriais</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="container">
        <div class="row text-center">
          <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="/img/oil-platform.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Plataformas</h5>
                    <p class="card-text">Gerencie e adicione novas plataformas.</p>
                    <a href="{{route('cruds.platform.index')}}" class="btn btn-primary">Configurações</a>
                  </div>
                </div>
          </div>
          <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="/img/instructions.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Tutoriais</h5>
                    <p class="card-text">Gerencie e adicione tutoriais.</p>
                    <a href="#" class="btn btn-primary">Configurações</a>
                  </div>
                </div>
          </div>
          <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="/img/enterprise.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text">Gerencie e adicione usuários.</p>
                    <a href="#" class="btn btn-primary">Configurações</a>
                  </div>
                </div>

          </div>
        </div>

      </div>

@endsection
