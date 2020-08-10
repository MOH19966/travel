<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('headScripts')

     <!-- Scripts add by me -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
  -->
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">





</head>
<body>


                <br>
                <br>
                <br>
                <br>


                <h2>      عل<span>م</span>  &nbsp;&nbsp;&nbsp; و &nbsp;&nbsp;&nbsp;&nbsp;تعل<span>م</span></h2>
                <video src="{{asset('videos/pp.mp4')}}" muted='' autoplay=''></video>
</body>
</html>
