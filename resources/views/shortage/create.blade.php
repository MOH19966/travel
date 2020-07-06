<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts-->
    <script src="{{  asset('js/app.js')  }}" defer></script>
    <script src="{{ asset('js/a.js') }}"  type="text/javascript"></script>


     <!-- Scripts add by me -->

    <!-- Fonts              disabeled them-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <!--  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


            <style>

.autocomplete {
/*the container must be positioned relative:*/
position: relative;
display: inline-block;
}
input {
border: 1px solid transparent;
background-color: #f1f1f1;
padding: 10px;
font-size: 16px;
}
input[type=text] {
background-color: #f1f1f1;
width: 100%;
}
input[type=submit] {
background-color: DodgerBlue;
color: #fff;
}
.autocomplete-items {
border: 1px solid #d4d4d4;
border-bottom: none;
border-top: none;
z-index: 99;
/*position the autocomplete items to be the same width as the container:*/
top: 100%;
left: 0;
right: 0;
}
.autocomplete-items div {
padding: 10px;
cursor: pointer;
background-color: #fff;
border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
/*when hovering an item:*/
background-color: #e9e9e9;
}
.autocomplete-active {
/*when navigating through the items using the arrow keys:*/
background-color: DodgerBlue !important;
color: #ffffff;
}
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">

                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <!-- img by me-->     <img src="https://i.pravatar.cc/35?u={{Auth()->user()->id}}" class=" rounded-circle"  alt="image">

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
</div>

     <div class="container" id="app">
        <h1>shortage.create template </h1>

        <!-- Form -->
            <form  autocomplete="off" action="{{ route('shortage.store') }}" method="post">
              @csrf


          <div class="form-group autocomplete">
        <label for="">المدرسة</label>


                <input required class="form-control" id="school_name" type="text" name="school_name" placeholder="SCHOOL NAME">




         @error('school_name')
                <div>{{ $message }}</div>
         @enderror
            </div>

        <!-- <div class="form-group">
           <label for="">المدرسة</label>
           <select  class="form-control" name="school" id="school">
               foreach ($schools as $school)

               <option>{ $school}  </option>

               endforeach

           </select>
         </div> !-->

         <div class="form-group">
           <label for="">الصف</label>
           <select  class="form-control" name="grade_id" id="grade_id" required>
              @foreach ($grades as $grade)

                <option value="{{ $grade->id }} ">
                  {{ $grade->name }}

                </option>


               @endforeach
           </select>

           @error('grade_id')
                <div>{{ $message }}</div>
         @enderror
         </div>

         <div class="form-group">
           <label for="grade_type">Type</label>
           <select class="form-control form-control-sm" name="grade_type" id="grade_type" required>
            <option value="g">عام</option>
            <option value="s">علمي</option>
             <option value="l">أدبي</option>
             <option value="c">تجارة</option>
           </select>

           @error('grade_type')
                <div>{{ $message }}</div>
           @enderror
         </div>

         <div class="form-group">
           <label for="">المادة</label>
           <select  class="form-control" name="material_id" id="material_id" required>

            @foreach ($materials as $material)
             <option value="{{ $material->id }}">{{ $material->name }} </option>
            @endforeach

           </select>
              @error('material_id')
                <div>{{ $message }}</div>
              @enderror
         </div>

          <div class="form-group">
           <label for="">عدد الساعات</label>
           <input  class="form-control" name="houres" id="houres" type="number" required >
           </div>
           <p>
             @error('houres')
                <div>{{ $message }}</div>
              @enderror
            </p>







             <button type="submit" class="btn btn-primary">Submit</button>










        </form>

    </div>




 <script type="text/javascript">


var schools = @json($schools);
console.log(schools);
autocomplete(document.getElementById("school_name"), schools);
console.log(schools);
</script>
</body>
</html>

