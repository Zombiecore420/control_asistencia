@section('content_header')
<h4> Inicio </h4>
@stop

<!DOCTYPE html>
<html lang="en">
   
<!-- Cabecera HTML, responsive page, titulo etc. -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Sistema Control De Asistencias </title>
    <!-- icono de la pestaña -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logooxd.ico')}}">
    <!-- inicia css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{asset ('assets/plugins/datepicker/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    
    @stack('horarios-style')
    <!-- fin de cabecera  -->
</head>
<body class="vertical-layout">
    
    <div id="containerbar">
        <!-- inicio de leftbar -->
        <div class="leftbar">
            <!-- inicio de slidebar-->
            <div class="sidebar">
                <!-- Añadir logo de la empresa dentro de este div -->
                <div class="logobar">
                    <a href="{{ url('index') }}" class="logo logo-large">
                        <img src="{{ asset('assets/images/lol.jpeg') }}" class="img-fluid" alt="logo">
                        <br>
                        <br>   
                        <span > CARPE DIEM MÉXICO</span>
                   
                    <b> <p>Centro de Capacitación Evaluación y Certificación Laboral </p></b>
                </a>
                    <a href="index.html" class="logo logo-small"><img src="{{ asset('assets/images/logosm.png') }}" class="img-fluid" alt="logo"></a>
                </div>
                <!-- final de logo empresa -->
                <!-- inicia Profilebar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li class="vertical-header">Principal</li>
                        <li>
                            <a href="{{ url('admin/empleados') }}">
                              <img src="{{ asset('assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="dashboard"><span>Empleados</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            
                        </li>
                        <li>
                            <a href="{{ url('admin/horario') }}">
                                <i class="ti-alarm-clock"  class="img-fluid" alt="layouts"></i><span>Horarios</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                           
                        </li>
                        <li>
                            <a href="javaScript:void();">
                              <i class="ti-book" class="img-fluid" alt="layouts"></i><span>Informes</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="apps-calender.html"><i class="mdi mdi-circle"></i>Calender</a></li>
                                <li><a href="apps-chat.html"><i class="mdi mdi-circle"></i>Chat</a></li> 
                                <li>
                                    <a href="javaScript:void();"><i class="mdi mdi-circle"></i>Email<i class="feather icon-chevron-right pull-right"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="apps-email-inbox.html"><i class="mdi mdi-circle"></i>Email Inbox</a></li>
                                        <li><a href="apps-email-open.html"><i class="mdi mdi-circle"></i>Email Open</a></li>
                                        <li><a href="apps-email-compose.html"><i class="mdi mdi-circle"></i>Email Compose</a></li>
                                    </ul>
                                </li>
                                <li><a href="apps-kanban-board.html"><i class="mdi mdi-circle"></i>Kanban Board</a></li>
                                <li><a href="apps-onboarding-screens.html"><i class="mdi mdi-circle"></i>Onboarding Screens</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html">
                                <i class="ti-calendar" class="img-fluid" alt="widgets"></i><span>Calendario</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                        </li>
                        <li>
                            <a href="widgets.html">
                                <i class="ti-write" class="img-fluid" alt="widgets"></i><span>Solicitudes</span><i class="feather icon-chevron-right pull-right"></i></a>
                            </a>
                        </li>                                   
                    </ul>
                </div>
                <!-- End Profilebar -->
                <!-- Start Navigationbar -->
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{ asset('assets/images/logoxd.JPG') }}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{ asset('assets/images/svg-icon/verticle.svg') }}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inicia topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="{{ asset('assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Buscar" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="{{ asset('assets/images/svg-icon/search.svg') }}" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div> 
                                </li> 
                            </ul>
                        </div>
                        
                        <div class="infobar">
                            <li class="list-inline-item">
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-user" alt="profile"></i><span class="feather icon-chevron-down live-icon"></span></a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink" style="" x-out-of-boundaries="">
                                    <div class="dropdown-item">
                                        <div class="profilename">
                                          <h5>Alex Palma</h5>
                                          <p>Administrador</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="userbox">
                                            <ul class="list-inline mb-center">
                                                <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{ asset('assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout"></a></li>
                                            </ul>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </li>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
           
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="breadcrumb-list">
                        </div>
                    </div>
                  <!-- Agregar botones -->   
                </div>    
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- contenido de la pagina -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">@yield('content_header')</h5>
                                </div>
                                @yield('contenido')
                                <div class="card-body">                         
                            </div>
                        </div>  
                    </div>
                </div>
                <!--Fin de contenido de pagina-->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2022 - Carpe Diem México Derechos Reservados.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
    <!-- Piety Chart js -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
    <!-- Vector Maps js -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Custom Dashboard Social js -->   
    <script src="{{ asset('assets/js/custom/custom-dashboard-social.js') }}"></script>
    <!-- Core js -->
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <!-- End js -->
</body>
</html>