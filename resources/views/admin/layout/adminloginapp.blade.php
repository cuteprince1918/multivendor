<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard HTML Template</title>
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="template language" name="keywords">
        <meta content="Tamerlan Soziev" name="author">
        <meta content="Admin dashboard html template" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="{{ url('public/admin/favicon.png' ) }}" rel="shortcut icon">
        <link href="{{ url('public/admin/apple-touch-icon.png' ) }}" rel="apple-touch-icon">
        <link href="{{ url('public/admin/bower_components/select2/dist/css/select2.min.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/bower_components/dropzone/dist/dropzone.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/bower_components/fullcalendar/dist/fullcalendar.min.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/bower_components/slick-carousel/slick/slick.css' ) }}" rel="stylesheet">
        <link href="{{ url('public/admin/css/main.css?version=4.5.0' ) }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('public/admin/css/toastr.min.css') }}">
        @if (!empty($plugincss)) 
            @foreach ($plugincss as $value) 
                @if(!empty($value))
                    <link rel="stylesheet" href="{{ url('public/admin/css/'.$value) }}">
                @endif
            @endforeach
        @endif
        @if (!empty($css)) 
        @foreach ($css as $value) 
        @if(!empty($value))
            <link rel="stylesheet" href="{{ url('public/admin/css/'.$value) }}">
        @endif
        @endforeach
        @endif
        <script>
                var baseurl = "{{ asset('/') }}";
        </script>
        <style>
            .error{
                color: red;
            }
            .has-error {
                border-color: red!important;
                border-width: 1px!important;
            }
            .form-control.error {
                border: 1px solid red!important;
            }
            label.error {
                display: none!important;
            }
        </style>
    </head>
    <body class="auth-wrapper">
        @yield('content')
        <script src="{{ url('public/admin/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ url('public/admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('public/admin/js/toastr.min.js') }}"></script>
        @if (!empty($pluginjs))
        @foreach ($pluginjs as $value)
        <script src="{{ url('public/admin/plugins/'.$value) }}" type="text/javascript"></script>
        @endforeach
        @endif
        @if (!empty($js))
        @foreach ($js as $value)
        <script src="{{ url('public/admin/js/'.$value) }}" type="text/javascript"></script>
        @endforeach
        @endif

        <script>
            jQuery(document).ready(function() {
            @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{  $value }}
                @endforeach
            @endif
            });
        </script>
    </body>
</html>
