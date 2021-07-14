<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('/vendor/laratrust/img/logo.png') }}">
  <title>Strathmore AMS @yield('title')</title>
  <link href="{{ asset(mix('laratrust.css', 'vendor/laratrust')) }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #013676!important;">
        <div class="container">
            <a class="navbar-brand d-flex" href="{{ route('dashboard') }}" style="background-color: #fff; border-radius: 50%; padding: 10px">
            <div><img src="{{ asset('/vendor/laratrust/img/logo.png') }}" style="height:40px"></div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link pt-3" href="{{ route('login') }}" style="color: #fff; font-size:13px;">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link pt-3" href="{{ route('register') }}" style="color: #fff; font-size:13px;">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Dashboard
                        </a>
                      </li>
                    <li class="nav-item">
                        <a href="{{route('registration')}}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Self Registration
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Coursework Marks
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('progress_report')}}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Progress Reports
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('attendance', Auth::user()->student->group->year)}}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Attendance
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('exam-card') }}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Exam Card
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('feesstructure.index')}}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Fee Information
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Register for Graduation
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                      </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

  <header class="bg-white shadow">
    <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col">
      <h1 class="text-3xl font-bold leading-tight text-gray-900" style="width: 60%;">
        @yield('title')
      </h1>
      @yield('help-center')
    </div>
  </header>
  <main>
    <div class="max-w-6xl mx-auto py-6 sm:px-6 lg:px-8">
      @foreach (['error', 'warning', 'success'] as $msg)
        @if(Session::has('laratrust-' . $msg))
        <div class="alert-{{ $msg }}" role="alert">
          <p>{{ Session::get('laratrust-' . $msg) }}</p>
        </div>
        @endif
      @endforeach
      <div class="px-4 py-6 sm:px-0">
        @yield('content')
      </div>
    </div>
  </main>
</div>
</body>
</html>
