
@extends('layout.authentication')
@section('title', 'Inicio de Sesión')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
                <h4 class="logo"><a href="{{route('index')}}"><img src="{{asset ('assets/images/logo.svg')}}" alt="Logo"></a> EXPOCYTEQ <?php echo date("Y"); ?></h4>
                <h3>Inicio de Sesión</h3>
                <p>Inicia sesión en tu cuenta para entrar al sistema de administración de la <strong>EXPOCYTEQ <?php echo date("Y"); ?></strong></p>
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
        <div class="col-lg-5 col-md-12 offset-lg-1">
          <div class="card-plain">
              <div class="header">
                  <h5>Iniciar Sesión</h5>
              </div>
              @if (session('status'))
                <div class="row">
                  <div class="col-sm-12">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                      <span>{{ session('status') }}</span>
                    </div>
                  </div>
                </div>
              @endif
              <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                  <div class="input-group">
                      <input type="email" value="{{ old('email') }}" name="email" class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo">
                      <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="input-group">
                      <input type="password" name="password" placeholder="Contraseña" class="form-control" />
                      <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>

              <div class="footer">
                <button type="submit" class="btn btn-primary btn-round btn-block" name="button">INICIAR SESIÓN</button>
                <a href="{{route('index')}}" class="btn btn-primary btn-simple btn-round btn-block">Registrarse</a>
              </div>
              </form>
              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('¿Olvidaste tu contraseña?') }}
                  </a>
              @endif
          </div>
        </div>
    </div>
</div>
@stop
