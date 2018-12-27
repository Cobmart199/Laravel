<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->


    <title>Laravel</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>

    {{-- <link  href="{{ URL::to('css/styles.css') }}" rel="stylesheet"> --}}

    <link  href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">






</head>
<body>
<!-- Here you can put your content -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}

@include('partials.header')
<div class="container-fluid">
    @yield('content')
</div>

</body>
</html>
