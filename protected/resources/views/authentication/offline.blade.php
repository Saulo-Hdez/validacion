@extends('layout.authentication')
@section('title', 'Page Offline')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
                <h4 class="logo"><img src="../assets/images/logo.svg" alt=""> InfiniO</h4>
                <h3>The General Shutdown</h3>
                <p>We apologize for the inconvenience, but we're performing some maintenance. We'll be back up soon!</p>
                <div class="footer">
                    <ul  class="social_link list-unstyled">
                        <li><a href="https://thememakker.com" title="ThemeMakker"><i class="zmdi zmdi-globe"></i></a></li>
                        <li><a href="https://themeforest.net/user/thememakker" title="Themeforest"><i class="zmdi zmdi-shield-check"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/thememakker/" title="LinkedIn"><i class="zmdi zmdi-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/thememakkerteam" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="http://twitter.com/thememakker" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a href="http://plus.google.com/+thememakker" title="Google plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a href="https://www.behance.net/thememakker" title="Behance"><i class="zmdi zmdi-behance"></i></a></li>
                    </ul>                        
                    <ul>
                        <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                        <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                        <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                        <li><a href="javascript:void(0);">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>                        
        <div class="col-lg-5 col-md-12 offset-lg-1">
            <div class="card-plain">
                <div class="header">
                    <h5>Our site is getting a little tune up and some love.</h5>                            
                </div>
                <form class="form">                            
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                    </div>                           
                </form>
                <div class="footer">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-block">GO TO HOMEPAGE</a>                                
                </div>
                <a href="javascript:void(0);" class="link">Need Help?</a>
            </div>
        </div>
    </div>
</div>
@stop