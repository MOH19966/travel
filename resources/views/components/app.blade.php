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
     {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}


    <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('csss')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm border border-dark shadow">
            <div class="container ">
                <a class="navbar-brand text-danger m-0 p-0"  href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                       <li >
                            <img src="{{asset('photos/logo/logo.png')}}"
                            alt="logo" width="150" height="80"
                            class="m-0 p-0"  >
                      </li>

                    </ul>

<!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-danger">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-danger font-weight-bold	" href="{{ route('login') }}"> {{ __('دخول') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">

                                    <a class="nav-link text-success font-weight-bold big" href="{{ route('register') }}">{{ __('التسجيل') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                           <!-- asset(curr_user()->info->college_card_image -->
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <!-- img by me-->
                                                       {{-- <img  src="{{is_null(curr_user()->info->college_card_image)?
                                                       'https://i.pravatar.cc/35?u='.curr_user_id()
                                                       : asset('storage/'.curr_user()->info->college_card_image) }}" alt="my photo"
                                                       class="rounded-circle" width="40" height="40"> --}}


                                    {{ Auth::user()->name }} <span class="caret"></span>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<!-- لملف الشخصي-->            <a href="{{route('info.profile', auth()->user())}}" class="dropdown-item">الملف الشخصي </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!--- flash-message laravel 7 -->
        @include('flash-message')

        <main class="py-4">
            {{-- <img src="{{asset('photos/logo/logo.png')}}" alt="logo"  width="500" height="500" > --}}

            {{$slot}}

        </main>
</div>




        <!-- Footer -->
<footer class="page-footer bg-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> made with love  by Mohammed AlMahmood</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>
