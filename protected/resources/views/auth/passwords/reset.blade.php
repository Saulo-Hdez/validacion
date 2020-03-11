@extends('layout.authentication')
@section('title', 'Inicio de Sesión')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
                <h4 class="logo"><a href="{{route('index')}}"><img src="{{asset ('assets/images/logo.svg')}}" alt="Logo"></a> EXPOCYTEQ <?php echo date("Y"); ?></h4>
                <h3>Cambiar Contraseña</h3>
                <p>Introduce la nueva contraseña para restablecerla.</p>
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
                  <h5>Nueva Contraseña</h5>
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
              <form class="form" method="POST" action="{{ route('password.update') }}">
                  @csrf

                  <input type="hidden" name="token" value="{{ $token }}">

                  <div class="input-group">
                      <input id="email" type="email" value="{{ $email ?? old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" required autocomplete="email" autofocus>
                      <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="input-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Nueva Contraseña" autocomplete="new-password">

                      <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="input-group">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña"  autocomplete="new-password">

                      <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                  </div>

                <div class="footer">
                  <button type="submit" class="btn btn-primary btn-round btn-block" name="button">RESTABLECER CONTRASEÑA</button>
                </div>
              </form>
          </div>
        </div>
    </div>
</div>
@stop
