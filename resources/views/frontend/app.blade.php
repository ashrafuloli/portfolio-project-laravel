<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>MR-X</title>
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/favicon.ico')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet"/>
    <script src="{{asset('frontend/js/axios.min.js')}}"></script> <!-- layout rendering -->
</head>

<body>
@include('frontend.components.navbar')
@include('frontend.components.loader')

<div class="" id="content-div">
    @yield('frontend-content')
</div>

@include('frontend.components.footer')
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
