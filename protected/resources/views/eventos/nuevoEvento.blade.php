@extends('layout.master')
@section('parentPageTitle', 'Eventos')
@section('title', 'Crear nuevo evento')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-sm-12 text-right">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif
</div>
@stop

@section('content')
<?php
use carbon\Carbon;
$now = Carbon::now('America/Mexico_City');
$nowI = $now->toDateString();
$nowF = $now->addMonths(6)->toDateString();
$now = Carbon::now('America/Mexico_City');
$finalI = $now->addDays(6);
$finalF = $finalI;
$finalI = $finalI->toDateString();
$finalF->addMonths(6)->toDateString();
?>
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="card">
      <div class="header">
        <h2><strong>Formulario</strong> para crear un nuevo evento.</h2>
      </div>
      <div class="body">
        <form class="form" method="POST" action="hola" autocomplete="off">
          <h3>Información del Evento</h3>
            <div class="row clearfix">
              <div class="col-md-6">
                <label for="nombreEvento">Nombre del Evento</label>
                <div class="form-group">
                  <input type="text" name="nombreEvento" value="{{ old('nombreEvento') }}" id="nombreEvento" class="form-control form-control{{ $errors->has('nombreEvento') ? ' is-invalid' : '' }}" placeholder="Ingresa el nombre del evento" required autofocus>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group form-float">
                  <label for="fechaInicio">Fecha de Inicio</label>
                  <div class="form-group">
                    <input value="{{$nowI}}" min="{{$nowI}}" max="{{$nowF}}" type="date" name="fechaInicio" value="{{ old('fechaInicio') }}" id="fechaInicio" class="form-control form-control{{ $errors->has('fechaInicio') ? ' is-invalid' : '' }}" required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group form-float">
                  <label for="fechaFinal">Fecha de Finalización</label>
                  <div class="form-group">
                    <input value="{{$finalI}}" min="{{$finalI}}" max="{{$finalF}}" type="date" name="fechaFinal" value="{{ old('fechaFinal') }}" id="fechaFinal" class="form-control form-control{{ $errors->has('fechaFinal') ? ' is-invalid' : '' }}" required>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="row clearfix">
              <div class="col-md-4">
                <label for="codigo">Código del Evento con el que los alumnos se podrán registrar</label>
                <div class="form-group">
                  <input type="text" name="codigo" value="{{ old('codigo') }}" id="codigo" class="form-control form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" placeholder="Ingresa el código del evento (es sensible a Mayúsculas)" required>
                </div>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-md-12">
                <h4>Días del evento</h4>
              </div>
            </div>
            <hr>
            <div class="row clearfix">
              <div class="col-md-2">
                <div class="checkbox">
                  <input id="lunes" type="checkbox" name="lunes">
                  <label for="lunes">
                    Lunes
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group form-float">
                  <label for="horaInicioL">Hora de Inicio Lunes</label>
                  <div class="form-group">
                    <input type="time" name="horaInicioL" value="{{ old('horaInicioL') }}" id="horaInicioL" class="form-control form-control{{ $errors->has('horaInicioL') ? ' is-invalid' : '' }}" required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group form-float">
                  <label for="horaInicioL">Hora de Finalización Lunes</label>
                  <div class="form-group">
                    <input value="{{$finalI}}" min="{{$finalI}}" max="{{$finalF}}" type="date" name="fechaFinal" value="{{ old('fechaFinal') }}" id="fechaFinal" class="form-control form-control{{ $errors->has('fechaFinal') ? ' is-invalid' : '' }}" required>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkbox">
                  <input id="lunes" type="checkbox" name="lunes">
                  <label for="lunes">
                    Todos los días empiezan y terminan a la misma hora
                  </label>
                </div>
              </div>

            </div>
            <hr>
            <div class="row clearfix">
              <div class="col-md-2">
                <div class="checkbox">
                  <input id="martes" type="checkbox" name="martes">
                  <label for="martes">
                    Martes
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group form-float">
                  <label for="fechaInicio">Hora de Inicio Martes</label>
                  <div class="form-group">
                    <input value="{{$nowI}}" min="{{$nowI}}" max="{{$nowF}}" type="date" name="fechaInicio" value="{{ old('fechaInicio') }}" id="fechaInicio" class="form-control form-control{{ $errors->has('fechaInicio') ? ' is-invalid' : '' }}" required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group form-float">
                  <label for="fechaFinal">Hora de Finalización Lunes</label>
                  <div class="form-group">
                    <input value="{{$finalI}}" min="{{$finalI}}" max="{{$finalF}}" type="date" name="fechaFinal" value="{{ old('fechaFinal') }}" id="fechaFinal" class="form-control form-control{{ $errors->has('fechaFinal') ? ' is-invalid' : '' }}" required>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="form-group form-float">
              <input type="text" name="name" placeholder="First Name *" class="form-control" required>
            </div>
            <div class="form-group form-float">
              <input type="text" name="surname" placeholder="Last Name *" class="form-control" required>
            </div>
            <div class="form-group form-float">
              <input type="email" name="email" placeholder="Email *" class="form-control" required
            </div>
            <div class="form-group form-float">
              <textarea name="address" cols="30" rows="3" placeholder="Address *" class="form-control no-resize" required></textarea>
            </div>
            <div class="form-group form-float">
              <input min="18" type="number" name="age" placeholder="Age *" class="form-control" required>
              <div class="help-info">The warning step will show up if age is less than 18</div>
            </div>
          <h3>Terms & Conditions - Finish</h3>
            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
            <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
        </form>
      </div>
    </div>
  </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-steps/jquery.steps.css') }}" />
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
@stop
