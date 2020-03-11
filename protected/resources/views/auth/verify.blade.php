@extends('layout.authentication')
@section('title', 'Verificar Email')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
                <h4 class="logo"><a href="{{route('index')}}"><img src="{{asset ('assets/images/logo.svg')}}" alt="Logo"></a> EXPOCYTEQ <?php echo date("Y"); ?></h4>

                <h3>Verifica tu dirección de correo</h3>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                    </div>
                @endif
                <p>{{ __('Antes de continuar, revise su correo electrónico para obtener un enlace de verificación. Si no ve el correo, revise su bandeja de SPAM o correo no deseado.') }}</p>
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
                    <h5>¿No recibiste el correo?</h5>
                    <span>Puedes solicitar un código de verificación nuevo.</span>
                </div>
                <form class="form" method="post" action="{{ route('verification.resend') }}">
                  @csrf
                  <div class="footer">
                      <button type="submit" class="btn btn-primary btn-round btn-block" name="button">Solicitar código nuevo</button>

                  </div>
                </form>
                <a href="javascript:void(0);" class="link">Necesitas ayuda?</a>
            </div>
        </div>
    </div>
</div>
@stop
