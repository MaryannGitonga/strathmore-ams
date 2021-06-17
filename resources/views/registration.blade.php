@extends('laratrust::panel.layout')

@section('title', 'Self Registration')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
  <title>Document</title>
  <style>
    .table{
      /*border-radius: 5px;*/
      /*border-collapse: separate;
      border-spacing: 1px 0;*/

        padding: 0px;
     border-collapse: collapse;
     text-indent: initial;
     white-space: normal;
     line-height: normal;
     font-weight: normal;
     font-size: 14px;
     font-style: normal;
     text-align: start;
     border-spacing: 0pt;
     border-radius: 12px 12px 12px 12px;
     overflow: hidden;
     font-variant: normal;
     border: medium none;
     border-color: #000000 ;
     z-index: 2;
     /*text-align: center;*/
    }

    .th{
      /*text-align: center;*/
      border: thin solid #ccc;
    
    }

    th{
      border-spacing: 1px 0;
      
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
      background-color: #013676;
      color: #fff;
     
    }

    .registration{
      background-color: #DDDDDD;
    }

    .registered, .available{
      background-color: #013676;
      color: #fff;
      
    }

    .units{
      border: 1px solid #C0ACAC;
    }

    .d{
      text-align: center;
    }

    .option a.selected {
      background-color: white;
    }
    .unit-section .available:hover {
      color: black;
    }
  </style>
</head>
<body>

  <div class="registration p-2">
  <div class="unit-section flex mt-3">
    <a href="{{route('registration')}}" class="registered ml-4 mx-2 p-2" style="text-decoration: none;">Registered Units</a>
    <a href="{{route('available')}}" class="available mx-2 p-2" style="text-decoration: none; background-color: grey;">Available Units</a>    
  </div>

  <div class="units p-2">
    <div class="mt-2 -mb-2 option">
      <a href="{{route('registration')}}" class="ordinary p-2" style="text-decoration: none;">Ordinary</a>
      <a href="{{route('retake')}}" class="retakes p-2" style="text-decoration: none;">Retakes/Specials</a>
    </div>
    <hr>
            <table class="table">
              <thead>
                <tr>
                  <th class="th theading">Unit Code</th>
                  <th class="th theading">Unit Name</th>
                  <th class="th theading">Year</th>
                  <th class="th theading">Credits</th>
                  <th class="th theading">Group</th>
                  <th class="th theading">Semester</th>
                  <th class="th theading">Status</th>
                </tr>
              </thead>
              <tbody class="bg-white">
                <tr class="tr">
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Advanced Database Systems</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
                <tr>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3101</td>
                  <td class="td text-sm leading-5 text-gray-900">Computer Fundamentals</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900 d">3</td>
                  <td class="td text-sm leading-5 text-gray-900">ICS 3A May 2021</td>
                  <td class="td text-sm leading-5 text-gray-900">First Semester</td>
                  <td class="td text-sm leading-5 text-gray-900">AWAITING EXAM</td>
                </tr>
              </tbody>
            </table>
    </div>
  </div>
  
</body>
</html>
@endsection
