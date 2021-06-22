

<!DOCTYPE html>
<html>
<head>
  <title>Strathmore Ams</title>
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link rel="stylesheet" type="text/css" href="/css/susams.css">
  <link rel="stylesheet" type="text/css" href="/css/jquery-ui-custom.css">

   
  
</head>
<body>

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
                        <a class="nav-link pt-3" href="{{ route('login') }}" style="color: #fff; font-size:13px;">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link pt-3" href="{{ route('register') }}" style="color: #fff; font-size:13px;">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          My Profile
                        </a>
                      </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Self Registration
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Coursework Marks
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Progress Reports
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Attendance
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Exam Card
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Fee Structure
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link pt-3 pl-3" style="color: #fff; font-size:13px;">
                          Register for Graduation
                        </a>
                      </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>













  <div class="page-content-main">
  <div style="color: black; size: 6px;">
    <span align="center">
      "Best viewed with"
      <a href="http://www.mozilla.org/en-US/firefox" target="_blank">
        <img src="/images/firefox-logo.jpg"width="25" height="25" title="Mozilla firefox">
      </a>
      <a href="https://www.google.com/chrome/?hl=en&brand=chmo" target="_blank">
        <img src="/images/chrome-logo.jpg"width="35"height="25" title="Google Chrome" border="0">
      </a>
 </span>
 <span align="center">
  "Download the"<font color="blue"><b>My strath</b></font>"mobile app from the Android Play Store or Apple App Store to view your details on the go"
   
 </span>
 <span id="paramStudentDetails"align="right" style="float: right;"> 121521-Otieno,Stephanie Achieng</span>
  </div>
  <div id="page-content-box">
    
    <div id="content">
    <h1 class="heading" >FEES STRUCTURE DOWNLOAD</h1>
    <div id="sectionHeader">
<table width="80%" class="table" style="margin-left: auto;margin-right: auto;margin-bottom:20px; margin-top: 20px; ">
  <tbody>
    <tr>
      <th>Student Number</th>
      <td align="right">121521</td>
      <th>Student Names</th>
      <td align="right">Otieno, Stephanie Achieng</td>
    </tr>
    <tr>
      <th>Syllabus</th>
      <td align="right">BICS(April)-18</td>
      <th>Fee Balance</th>
      <td align="right">0.00</td>
    </tr>
  </tbody>
</table>

</div>
<hr>
<br>
<br>
<div id="sectionData"></div>
<div id="sectionSemester"></div>

<table class="table" width="80%" id="tblExamCards" style="margin-left: auto; margin-right: auto;margin-bottom: 100px;">
  <tbody>
    <tr>
      <td colspan="3" align="left" style="background-color:#013676 ;color: #fff">
        <div style="display: block; font-weight: bold;text-align: center;">
          <span>May 2021</span> Semester  </div>
          <div style="display: block;"> Start Date: <span>17-MAY-2021</span></div><div style="display: block;"> End Date: <span>03-SEP-2021</span></div></td></tr><tr><td class="subhead">Student Year</td><td class="subhead">Download</td></tr><tr class="table-row"><td align="center"><span>2</span></td><td align="center"><a href="https://su-sso.strathmore.edu/web/../storage/FeeStructures/2223.pdf" target="_new"> Download </a></td></tr>
<tr class="table-row"><td align="center"><span>3</span></td><td align="center"><a href="https://su-sso.strathmore.edu/web/../storage/FeeStructures/2222.pdf" target="_new"> Download </a></td></tr>
<tr class="table-row"><td align="center"><span>4</span></td><td align="center"><a href="https://su-sso.strathmore.edu/web/../storage/FeeStructures/2224.pdf" target="_new"> Download </a></td></tr>
<tr class="table-row"><td colspan="3"></td></tr>
</tbody></table>
  </div></div>
  <div align="center" style="color: grey; size: 6px;"> Copyright © 
          <script type="text/javascript">           var theDate = new Date();
            document.write(theDate.getFullYear());
          </script>2021
        Strathmore University</div>


</body>
</html>