<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{setting('site.title')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .responsive {
            width: 50%;
            height: auto;
            }
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Bootstrap Core Css -->
     <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

      <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center container-fluid">
                    <div class="col-md-8">
                        <div class="card">
                            <div style="text-align:center"class="container-fluid">
                                <img src="{{asset('images/aau_logo.png')}}" alt="AAU log" class="responsive"/>
                                @yield('content')
                                 <div class="text-center">
                                    <div class="copyright">&copy; {{now()->year}} - All rights reserved. 
                                        <a href="https://www.aau.org" target="_blank"><b>Association Of African Universities</b></a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> 
    </div>
    
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/ui/notifications.js')}}"></script>
    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{asset('plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/pages/ui/tooltips-popovers.js')}}"></script>
    <!-- Ckeditor -->
    <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/pages/forms/editors.js')}}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
</body>
</html>
