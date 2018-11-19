@extends('layouts.app')
@section('title','Create')
@section('content')

<br>
<br>
<br>

<div class='container'>
  <div class='row'>
    <div class='col-md-10 col-md-offset-1'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='col-md-12'>


            <form id='saveForm' class='form-horizontal' role='form' method='POST' action='{{route("cruds.platform.store")}}' enctype='multipart/form-data'>
              {{ csrf_field() }}

              <!-- name -->
              <div class='form-group{{ $errors->has("name") ? " has-error" : "" }}'>
                <label for='name' class='col-md-4 control-label'>Name</label>
                <div class='col-md-6'>
                  <input id='name' type='text' class='form-control' name='name' placeholder='Nome da plataforma'>
                  @if ($errors->has("name"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("name") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- desc -->
              <div class='form-group{{ $errors->has("desc") ? " has-error" : "" }}'>
                <label for='desc' class='col-md-4 control-label'>Descrição</label>
                <div class='col-md-6'>
                  <input id='desc' type='text' class='form-control' name='desc' placeholder='Sobre a plataforma'>
                  @if ($errors->has("desc"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("desc") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- integration -->
              <div class='form-group{{ $errors->has("integration") ? " has-error" : "" }}'>
                <label for='integration' class='col-md-4 control-label'>Integração</label>
                <div class='col-md-6'>
                  <!-- <input id='integration' type='text' class='form-control' name='integration' placeholder='Plataforma ou site próprio?'> -->
                  <select class="form-control" id="integration" name="integration" >
                    <option value="Plataforma">Plataforma</option>
                    <option value="Site Próprio">Site Próprio</option>
                  </select>

                  @if ($errors->has("integration"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("integration") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- ec -->
              <div class='form-group{{ $errors->has("ec") ? " has-error" : "" }}'>
                <label for='ec' class='col-md-4 control-label'>EC</label>
                <div class='col-md-6'>
                  <!-- <input id='ec' type='text' class='form-control' name='ec' placeholder='Plataforma aceita PayPal Express Checkout?'> -->
                  <select class="form-control" id="ec" name="ec" >
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                    <option value="WPS">WPS</option>
                    <option value="Shortcut">Shortcut</option>
                    <option value="N/A">N/A</option>
                  </select>

                  @if ($errors->has("ec"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("ec") }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <!-- pp -->
              <div class='form-group{{ $errors->has("pp") ? " has-error" : "" }}'>
                <label for='pp' class='col-md-4 control-label'>PP</label>
                <div class='col-md-6'>
                  <!-- <input id='pp' type='text' class='form-control' name='pp' placeholder='Plataforma aceita PayPal Plus?'> -->
                  <select class="form-control" id="pp" name="pp" >
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                    <option value="N/A">N/A</option>
                  </select>

                  @if ($errors->has("pp"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("pp") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- active -->
              <div class='form-group{{ $errors->has("active") ? " has-error" : "" }}'>
                <label for='active' class='col-md-4 control-label'>Ativo?</label>
                <div class='col-md-6'>
                  <!-- <input id='active' type='text' class='form-control' name='active' placeholder='Plataforma ativa?'> -->
                  <select class="form-control" id="active" name="active" >
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                  @if ($errors->has("active"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("active") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- details -->
              <div class='form-group{{ $errors->has("details") ? " has-error" : "" }}'>
                <label for='details' class='col-md-4 control-label'>Detalhes</label>
                <div class='col-md-6'>
                  <input id='details' type='text' class='form-control' name='details' placeholder='Detalhes adicionais'>
                  @if ($errors->has("details"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("details") }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <!-- img -->
              <div class='form-group{{ $errors->has("img") ? " has-error" : "" }}'>
                <label for='img' class='col-md-4 control-label'>Imagem</label>
                <div class='col-md-6'>
                  <!-- <input id='img' type='text' class='form-control' name='img' placeholder='Link da imagem da plataforma'> -->
                  <input id='img' type='file' class='form-control' name='img[]' placeholder='Link da imagem da plataforma'>
                  <input id='img2' type='file' class='form-control' name='img[]' placeholder='Link da imagem da plataforma'>
                  <input id='img3' type='file' class='form-control' name='img3[]' placeholder='Link da imagem da plataforma'>
                  @if ($errors->has("img"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("img") }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <!-- order -->
              <div class='form-group{{ $errors->has("order") ? " has-error" : "" }}'>
                <label for='order' class='col-md-4 control-label'>Ordem</label>
                <div class='col-md-6'>
                  <input id='order' type='number' class='form-control' name='order' placeholder='Numero de ordem de exibição' step='10' min='0' max='1000'>
                  @if ($errors->has("order"))
                  <span class='help-block text-danger'>
                    <strong>{{ $errors->first("order") }}</strong>
                  </span>
                  @endif
                </div>
              </div>



              <div class='form-group'>
                <label for='' class='col-md-4 control-label'></label>
                <div class='col-md-6'>
                  <button class='btn btn-info'>Adicionar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
