<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="token" content="{{csrf_token()}}" />
    <title>{{setting('site.title')}} -  {{$institution->name_english }}</title> 
    <!-- Favicon-->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
    
    <!-- Bootstrap DatePicker Css -->
    <link href="../../plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    
    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
  
</head>
<body class="theme-blue"  <!--background="{{asset('img/aau.jpg')}} -->" >
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                 <a class="navbar-brand">{{setting('site.title')}} (<b>{{$institution->name_english}} - {{$institution->application_id}} </b>)</a> 
            </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown pull-right">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">more_vert</i>
                            <!--<span class="label-count">7</span>-->
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"> {{$institution->name_english}} </li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                         <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <div class="icon-circle bg-light-blue">
                                                <i class="material-icons">exit_to_app</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Logout</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>                                       
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>-->
                        </ul>
                    </li>
            </ul>
        </div>
        </div>
    </nav>
    
   <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        @include('layouts.sidebar')
        <!-- #Footer -->
    </aside>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                   @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

     <!-- Slimscroll Plugin Js -->
     <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

      <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

       <!-- Jquery Spinner Plugin Js -->
       <script src="{{asset('plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

       <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
     
    <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>

     <!-- Autosize Plugin Js -->
     <script src="{{asset('plugins/autosize/autosize.js')}}"></script>

<!-- Moment Plugin Js -->
<script src="{{asset('plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('js/pages/ui/tooltips-popovers.js')}}"></script>
    <!-- Ckeditor -->
    <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/pages/forms/editors.js')}}"></script>
     
</body>
</html>
