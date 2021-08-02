<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #013676!important; padding-bottom: 20px">
    <div class="container">
        <a class="navbar-brand d-flex" href="{{ route('dashboard') }}" style="background-color: #fff; border-radius: 50%; padding: 5px">
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
                    <a href="{{route('graduation')}}" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
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
