<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('/vendor/laratrust/img/logo.png') }}">
  <title>Strathmore AMS - @yield('title')</title>
  <link href="{{ asset(mix('laratrust.css', 'vendor/laratrust')) }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex" href="{{ route('home') }}">
            <div><img src="{{ asset('/vendor/laratrust/img/logo.png') }}" style="height:40px; border-right: 1px solid #333;" class="pr-3" a></div>
                <div class="pl-3 pt-2" style="color:#000;">{{ config('app.name', 'StratizenAsk') }}</div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link pt-3" href="{{ route('login') }}" style="color: #000; font-size:16px;">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link pt-3" href="{{ route('register') }}" style="color: #000; font-size:16px;">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown pt-2">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle h6 pt-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#000">
                            <img src="{{ Storage::url('uploads/avatars/'. Auth::user()->id . '/' . Auth::user()->avatar . '') }}" class="rounded-circle pb-1 pr-1" style="height:30px;width:30px;float:left;" alt=""  onerror="this.src='uploads/avatars/avatar.png';">
                                    {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">My Profile</a>
                                <a class="dropdown-item" href="">Edit Profile</a>
                                @role('administrator')
                                <a class="dropdown-item" href="">Admin Panel</a>
                                @endrole
                                <a class="dropdown-item" href=""
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Self Registration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Coursework Marks
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Progress Reports
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Attendance
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Exam Card
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Fee Structure
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="" class="nav-link pt-3 pl-4" style="color: #000; font-size:16px;">
                              Register for Graduation
                            </a>
                          </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

  <header class="bg-white shadow">
    <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
        @yield('title')
      </h1>
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
