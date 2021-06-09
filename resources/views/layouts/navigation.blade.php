<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #013676!important;">
    <div class="container">
        <a class="navbar-brand d-flex" href="{{ route('home') }}" style="background-color: #fff; border-radius: 50%; padding: 10px">
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
                        <a class="nav-link pt-3" href="{{ route('login') }}" style="color: #fff; font-size:12.5px;">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link pt-3" href="{{ route('register') }}" style="color: #fff; font-size:12.5px;">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          My Profile
                        </a>
                      </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Self Registration
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Coursework Marks
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Progress Reports
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Attendance
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Exam Card
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Fee Structure
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:12.5px;">
                          Register for Graduation
                        </a>
                      </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
