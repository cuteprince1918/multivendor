<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ url('public/admin/favicon.png') }}" rel="shortcut icon">
    <link href="{{ url('public/admin/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ url('public/admin/https://fonts.googleapis.com/css?family=Lato:300,400,700') }}" rel="stylesheet" type="text/css') }}">
    <link href="{{ url('public/admin/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/css/main.css?version=4.5.0') }}" rel="stylesheet">
    <link href="{{ url('public/admin/css/toastr.min.css') }}" rel="stylesheet">
    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
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
    <link rel="stylesheet" href="{{ url('public/admin/'.$value) }}">
    @endif
    @endforeach
    @endif
</head>