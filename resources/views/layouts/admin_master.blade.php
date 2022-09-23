<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard</title>
        <link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/favicon_1.ico">
        <link href="{{asset('contents/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin')}}/assets/css/moltran.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin')}}/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin')}}/assets/css/tagsinput.css" rel="stylesheet" type="text/css" />
        @stack('css')
        <link href="{{asset('contents/admin')}}/assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="{{asset('contents/admin')}}/assets/js/modernizr.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/jquery.min.js"></script>
        <script src="{{asset('contents/admin')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/tagsinput.js"></script>
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]); !!};
        </script>
    </head>
    <body class="fixed-left">
        <div id="app">
            <div id="wrapper">
                @include('layouts.admin_include.topbar')
                @include('layouts.admin_include.sidebar')
                <div class="content-page">
                    <div class="content">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                    <footer class="footer">
                        Copyright © 2021 by <a target="_blank" href="https://www.beatbugsit.com/">BeatBugs IT</a>.
                    </footer>
                </div>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        <script>
        var resizefunc = [];
        </script>
        <script src="{{asset('contents/admin')}}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/detect.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/fastclick.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/waves.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/wow.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{asset('contents/admin')}}/plugins/moment/moment.min.js"></script>
        <script src="{{asset('contents/admin')}}/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="{{asset('contents/admin')}}/plugins/counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/pages/jquery.todo.js"></script>
        {{-- <script src="{{asset('contents/admin')}}/assets/pages/jquery.dashboard.js"></script> --}}
        <script src="{{asset('contents/admin')}}/assets/js/jquery.app.js"></script>
        @stack('js')
        <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>




        <script>
         @if(Session::has('message'))
            var type ="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                    toastr.info(" {{Session::get('message')}} ");
                    break;

                case 'success':
                    toastr.success(" {{Session::get('message')}} ");
                    break;

                case 'warning':
                    toastr.warning(" {{Session::get('message')}} ");
                    break;

                case 'error':
                    toastr.error(" {{Session::get('message')}} ");
                    break;
            }
        @endif
    </script>






    </body>
</html>
