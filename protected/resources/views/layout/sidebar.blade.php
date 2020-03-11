<aside id="leftsidebar" class="sidebar h_menu">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN</li>
                        <li class="{{ Request::segment(1) === 'home' ? 'active open' : null }}"><a href="{{route('home')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        @if(Auth::user()->tipo_id == 1)
                          <li class="{{ Request::segment(1) === 'eventos' ? 'active open' : null }}">
                              <a href="javascript:void(0);" class="menu-toggle"><i class="icon-grid"></i><span>Eventos</span></a>
                              <ul class="ml-menu">
                                  <li class="{{ Request::segment(2) === 'verEventos' ? 'active' : null }}"><a href="{{route('verEventos')}}">Ver Eventos</a></li>
                                  <li class="{{ Request::segment(2) === 'nuevoEvento' ? 'active' : null }}"><a href="{{route('nuevoEvento')}}">Nuevo Evento</a></li>
                              </ul>
                          </li>
                        @endif
                        <li class="{{ Request::segment(1) === 'ecommerce' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-basket-loaded"></i><span>Ecommerce</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}"><a href="#">Dashboard</a></li>
                                <li class="{{ Request::segment(2) === 'product' ? 'active' : null }}"><a href="#">Products</a></li>
                                <li class="{{ Request::segment(2) === 'productdetail' ? 'active' : null }}"><a href="#">Products Detail</a></li>
                                <li class="{{ Request::segment(2) === 'productlist' ? 'active' : null }}"><a href="#">Products List</a></li>
                                <li class="{{ Request::segment(2) === 'productorder' ? 'active' : null }}"><a href="#">Orders</a></li>
                                <li class="{{ Request::segment(2) === 'productcart' ? 'active' : null }}"><a href="#">Cart</a></li>
                                <li class="{{ Request::segment(2) === 'checkout' ? 'active' : null }}"><a href="#">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'ui' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-layers"></i><span>UI Elements</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'kit' ? 'active' : null }}"><a href="#">UI KIT</a></li>
                                <li class="{{ Request::segment(2) === 'alerts' ? 'active' : null }}"><a href="#">Alerts</a></li>
                                <li class="{{ Request::segment(2) === 'collapse' ? 'active' : null }}"><a href="#">Collapse</a></li>
                                <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a href="#">Colors</a></li>
                                <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a href="#">Dialogs</a></li>
                                <li class="{{ Request::segment(2) === 'icons' ? 'active' : null }}"><a href="#">Icons</a></li>
                                <li class="{{ Request::segment(2) === 'listgroup' ? 'active' : null }}"><a href="#">List Group</a></li>
                                <li class="{{ Request::segment(2) === 'mediaobject' ? 'active' : null }}"><a href="#">Media Object</a></li>
                                <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a href="#">Modals</a></li>
                                <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a href="#">Notifications</a></li>
                                <li class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}"><a href="#">Progress Bars</a></li>
                                <li class="{{ Request::segment(2) === 'rangesliders' ? 'active' : null }}"><a href="#">Range Sliders</a></li>
                                <li class="{{ Request::segment(2) === 'sortablenestable' ? 'active' : null }}"><a href="#">Sortable & Nestable</a></li>
                                <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a href="#">Tabs</a></li>
                                <li class="{{ Request::segment(2) === 'waves' ? 'active' : null }}"><a href="#">Waves</a></li>
                            </ul>
                        </li>
                        <li class="header">FORMS, CHARTS, TABLES</li>
                        <li class="{{ Request::segment(1) === 'forms' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-doc"></i><span>Forms</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="#">Basic Elements</a></li>
                                <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="#">Advanced Elements</a></li>
                                <li class="{{ Request::segment(2) === 'examples' ? 'active' : null }}"><a href="#">Form Examples</a></li>
                                <li class="{{ Request::segment(2) === 'validation' ? 'active' : null }}"><a href="#">Form Validation</a></li>
                                <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a href="#">Form Wizard</a></li>
                                <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a href="#">Editors</a></li>
                                <li class="{{ Request::segment(2) === 'formupload' ? 'active' : null }}"><a href="#">File Upload</a></li>
                                <li class="{{ Request::segment(2) === 'imgcropper' ? 'active' : null }}"><a href="#">Image Cropper</a></li>
                                <li class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}"><a href="#">Summernote</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-tag"></i><span>Tables</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="#">Normal Tables</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'charts' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-bar-chart"></i><span>Charts</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a href="#">Morris</a></li>
                            </ul>
                        </li>
                        <li class="header">EXTRA COMPONENTS</li>
                        <li class="{{ Request::segment(1) === 'widgets' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-puzzle"></i><span>Widgets</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'app' ? 'active' : null }}"><a href="#">Apps Widgetse</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'authentication' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-lock"></i><span>Auth</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'login' ? 'active' : null }}"><a href="#">Sign In</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'pages' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="icon-folder-alt"></i><span>Pages</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'blank' ? 'active' : null }}"><a href="#">Blank Page</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'maps' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-map"></i><span>Maps</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'jvectormap' ? 'active' : null }}"><a href="#">jVectorMap</a></li>
                                <li class="{{ Request::segment(2) === 'yandex' ? 'active' : null }}"><a href="#">YandexMap</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
