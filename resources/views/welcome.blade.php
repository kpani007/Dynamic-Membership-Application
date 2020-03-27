<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AAU Membership Application Form</title>

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

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
    <!-- Styles -->
   
</head>
<body>
    <section class="container">
        <div class="container-fluid">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                         <div class="header">
                        <div class="text-right">
                             @if (Route::has('login'))
                              @auth
                               <a href="{{ url('/apply') }}" class="btn btn-default waves-effect" role="button" aria-pressed="true">Go to Application</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary waves-effect" role="button" aria-pressed="true">Logout</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-default waves-effect" role="button" aria-pressed="true">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary waves-effect" role="button" aria-pressed="true">Register</a>
                                @endif
                              @endauth
                              @endif
                        </div>
                         </div>
                        <div class="body">
                           <div style="text-align:center"class="container-fluid">
                                <img src="{{asset('images/aau_logo.png')}}" alt="AAU log" class="responsive"/>
                           </div>
                              <div class="header bg-blue">
                                <h1>Membership Application Form</h1>
                            </div>
                            <p class="lead">
                                Welcome to the Association of African Universities Membership Online Application Platform.
                            </p>
                            <p>This application portal is for institutions seeking to join the Association of African Universities. We welcome applications from <b>nationally-accredited</b> higher education institutions in Africa and beyond, subject to meeting our membership criteria.</p>
                            <ul class="list-group">
                                <li class="list-group-item">Check your <a href="https://www.aau.org/members/how-to-join-aau/" target="_blank">institution’s eligibility</a></li>
                                <li class="list-group-item">Find out more about our <a href="">membership fees </a></li>
                            </ul>
                            <p>The application process has been simplified and made flexible for you. Please note that the application involves a two-step process.</p>

                            <p><b>1. <a href="{{ route('register') }}">Create an account</a>.</b></p>
                            <p><b>2. <a href="{{ route('login') }}">Login to complete the application form</a>.</b></p>
                            <p>
                                Uncompleted forms can be saved, exited and continued at another time. The application form consists of
                                <b>{{$sections->count()}} sections</b>. After every section click on 'save and continue’ to proceed with your application. Also ensure that all fields are filled in completely and correctly. Please make sure you have read the <a href="https://www.aau.org/members/how-to-join-aau/" target="_blank">Membership Requirements</a> clearly and also refer to the <a href="http://www.aau.org/subs/membership/" target="_blank">Membership List</a> to ensure that your institution is not already a member of Association of African Universities.
                                <b><a href="{{url('/#requirements')}}">We advise that you take time and familiarize yourself with the  information required for this application</a>.</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingOne_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#requirements" aria-expanded="false" aria-controls="requirements">
                                            Required Information
                                        </a>
                                    </h4>
                                </div>
                                <div id="requirements"class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                    <div class="panel-body">
                                        @include('layouts.requirements')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <style>
        .responsive {
            width: 50%;
            height: auto;
            }
    </style>
    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>
    <!-- Custom Js -->

</body>

</html>