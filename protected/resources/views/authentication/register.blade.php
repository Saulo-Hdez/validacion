@extends('layout.authentication')
@section('title', 'Validación')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
              <h4 class="logo"><a href="{{route('index')}}"><img src="{{asset ('assets/images/logo.svg')}}" alt="Logo"></a> SMBN <?php echo date("Y"); ?></h4>
              <h3>Sistema de Valicación</h3>
              <p>Bienvenido, registrate llenando este formulario, para poder acceder y registrarte a los talleres de la <strong>SMBN <?php echo date("Y"); ?></strong></p>
              <div class="footer">
                    <ul  class="social_link list-unstyled">
                        <li><a href="#" title="ThemeMakker"><i class="zmdi zmdi-globe"></i></a></li>
                        <li><a href="#" title="Themeforest"><i class="zmdi zmdi-shield-check"></i></a></li>
                        <li><a href="#" title="LinkedIn"><i class="zmdi zmdi-linkedin"></i></a></li>
                        <li><a href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#" title="Google plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a href="#" title="Behance"><i class="zmdi zmdi-behance"></i></a></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="#" target="_blank">Contacto</a></li>
                        <li><a href="#" target="_blank">Nosotros</a></li>
                        <li><a href="#" target="_blank">Servicios</a></li>
                        <li><a href="javascript:void(0);">FAQ</a></li>
                        <li><a href="javascript:void(0);">Sistemas UND</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card-plain">
                <div class="header">
                    <h5>Registro</h5>
                    <span>Formulario de registro</span>
                </div>
                @if (session('errores'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('errores') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                  <form class="form" method="post" action="{{route('registrarUsuario')}}">
                   @csrf
                  <div class="input-group">
                      <input name="nombre" type="text" value="{{ old('nombre') }}" class="form-control form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Nombre">
                      <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                      @if ($errors->has('nombre'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('nombre') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input name="apellidos" type="text" value="{{ old('apellidos') }}" class="form-control form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" placeholder="Apellidos">
                      <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                      @if ($errors->has('apellidos'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('apellidos') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input name="email" type="email" value="{{ old('email') }}" class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Ingresa tu Email">
                      <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input name="telefono" type="text" value="{{ old('telefono') }}" class="form-control form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="Teléfono">
                      <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                      @if ($errors->has('telefono'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('telefono') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input name="laboratorio" type="text" value="{{ old('laboratorio') }}" class="form-control form-control{{ $errors->has('laboratorio') ? ' is-invalid' : '' }}" placeholder="Laboratorio de adscripción">
                      <span class="input-group-addon"><i class="zmdi zmdi-city"></i></span>
                      @if ($errors->has('laboratorio'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('laboratorio') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input name="ext" type="text" value="{{ old('ext') }}" class="form-control form-control{{ $errors->has('ext') ? ' is-invalid' : '' }}" placeholder="Extensión UNAM">
                      <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                      @if ($errors->has('ext'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('ext') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="input-group">
                      <input id="password" name="password" type="password" value="{{ old('password') }}" placeholder="Contraseña" class="form-control form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" />
                      <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input id="password-confirm" type="password" class="form-control form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirmar Contraseña">
                      <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                      @if ($errors->has('password_confirmation'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="checkbox">
                      <input id="terms" type="checkbox">
                      <label for="terms">He leído y acepto <a href="javascript:void(0);">Términos y Condiciones</a></label>
                  </div>
                  <div class="footer">
                      <button type="submit" class="btn btn-primary btn-round btn-block" name="button">Registrarme</button>
                      <a class="link" href="{{route('login')}}">¿Ya estás registrado?</a>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-styles')
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">
@stop
@section('page-script')
  <!-- <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script> -->
@stop
