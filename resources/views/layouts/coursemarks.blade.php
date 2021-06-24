<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Strathmore-AMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #333;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

table.center {
  margin-left: 80px; 
  margin-right: 150px;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-top: 100px;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #e4e6e8;}


#customers th {
  padding-top: 30px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #013676;
  color: white;
}

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

td{
       border: thin solid #CCCCCC;
       padding: 5px 15px;
       height: 2em;
    }
    .tr{
      border-color: #000;
    }
    .theading{
        color: #fff;
        background-color: #013676;
    }
    .registration{
      background-color: #DDDDDD;
    }
    .all{
      background-color: #013676;
      color: #fff;
      text-decoration: none;
    }
    .all:hover{
      background-color: #fff;
      color: #013676;
      text-decoration: none;
    }
    .mine{
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    }
    .units{
      border: 1px solid #C0ACAC;
    }
    .d{
      text-align: center;
    }
    #selected {
      background-color: white;
      color: #013676;
      border: solid #013676
    }

    .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

.btn:hover {
  background-color: #013676;
}
        </style>
    </head>
    <body>
        <div class="container">

        </div>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="IS3x4MKifRlcLKwKe3gLd4hoFjn4DxrQmU8LzuIr">

        <title>Strathmore-AMS</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" href="http://127.0.0.1:8000/vendor/laratrust/img/logo.png">

        <!-- Styles -->
        <link href="http://127.0.0.1:8000/vendor/laratrust/laratrust.css?id=41ea7a306eda21950d93" rel="stylesheet">
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        <!-- Scripts -->
        <script src="http://127.0.0.1:8000/js/app.js" defer></script>
    </head>
    <body>
        <div class="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #013676!important;">
    <div class="container">
        <a class="navbar-brand d-flex" href="http://127.0.0.1:8000" style="background-color: #fff; border-radius: 50%; padding: 10px">
        <div><img src="http://127.0.0.1:8000/vendor/laratrust/img/logo.png" style="height:40px"></div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <div class="navbar-nav ml-auto">
                <!-- Authentication Links -->
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
                    
                            </div>
        </div>
    </div>
</nav>


            <main class="py-4">
            <div class="container">
		<div class="jumbotron ">
        	<h1>Coursework Marks</h1>
    	</div>
           
        <button class="btn"><i class="fa fa-download"></i> Download</button>

          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
        <table class="min-w-full">
          <thead>
            <tr>
                <th class=" theading">Subject</th>
                <th class=" theading">Ordinary</th>
                <th class=" theading">Suplementary</th>
                
            </tr>

            
             <tr>
             <td></td>
             <td></td>
             <td></td>
             </tr>
          </thead>
          </div>
                            </main>
       
    </body>
</html>
