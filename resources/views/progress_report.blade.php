@extends('laratrust::panel.layout')

@section('title', 'Progress Report')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
  <style>
    .th{
        color: #013676;
    }

    td{
       border: 2px solid #CCCCCC;
       padding: 5px 15px;
       height: 2em;
    }

    .theading{
      color: #fff;
      background-color: #013676;

    }

    .registration{
      background-color: #DDDDDD;
    }

    .registered, .available{
      background-color: #013676;
      color: #fff;
      text-decoration: none;
    }
    .registered:hover, .available:hover{
      background-color: #fff;
      color: #013676;
      text-decoration: none;
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
  </style>
</head>
<body>
    <div class="flex flex-col">
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="unit-section flex mt-3">
                <a href="{{route('progress_report')}}"
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                   Completed Units
                </a>
                <a href="{{route('pending')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    Pending Units
                </a>
                <a href="{{route('notdone')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available" id="selected">
                    Compulsory Units Not Done
                </a>
                <a href="{{route('specialization')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available" id="selected">
                   Specialization Units Not Done
                </a>
                <a href="{{route('exemptions')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available" id="selected">
                    Exemptions
                </a>
            </div>
            <div class="mt-4 mb-2 option">
                <a href="#" class="ordinary p-2" style="text-decoration: none; color: #013676;">Download Progress Report</a>
            </div>
            <hr>
          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
              <thead>
              <tr>
                    <th class="th theading" colspan="11">
                        <h5>Completed Units</h5>
                    </th>
                </tr>
                <tr>
                    <th class="th">Academic Year</th>
                    <th class="th">Syllabus</th>
                    <th class="th">Year</th>
                    <th class="th">Subject Code</th>
                    <th class="th">Subject Name</th>
                    <th class="th">Type</th>
                    <th class="th">Marks</th>
                    <th class="th">Grade</th>
                    <th class="th">Credits</th>
                    <th class="th">GVP</th>
                    
                </tr>
              </thead>
              <tbody class="bg-white">
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2019-2020</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >1</td>
                    <td class="td text-sm leading-5 text-gray-900" >HED 1102</td>
                    <td class="td text-sm leading-5 text-gray-900" >Communication Skills I</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >95</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2019-2020</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >1</td>
                    <td class="td text-sm leading-5 text-gray-900" >HED 1202</td>
                    <td class="td text-sm leading-5 text-gray-900" >Communication Skills II</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >90</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2019-2020</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >1</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 2103</td>
                    <td class="td text-sm leading-5 text-gray-900" >Computer Networks</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >85</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2019-2020</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >1</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 1101</td>
                    <td class="td text-sm leading-5 text-gray-900" >Computer Fundamentals</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >78</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2019-2020</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >1</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 1203</td>
                    <td class="td text-sm leading-5 text-gray-900" >Database Systems</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >92</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2020-2021</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >2</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 2203</td>
                    <td class="td text-sm leading-5 text-gray-900" >Advanced Networking</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >80</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2020-2021</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >2</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 2211</td>
                    <td class="td text-sm leading-5 text-gray-900" >Digital Logics</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >75</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2020-2021</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >2</td>
                    <td class="td text-sm leading-5 text-gray-900" >HED 2102</td>
                    <td class="td text-sm leading-5 text-gray-900" >World Civilization</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >90</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2020-2021</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >2</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 2201</td>
                    <td class="td text-sm leading-5 text-gray-900" >Software Engineering</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >80</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2020-2021</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >2</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 2105</td>
                    <td class="td text-sm leading-5 text-gray-900" >System Analysis and Design</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >85</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;" >
                    <td class="td text-sm leading-5 text-gray-900" >2020-2021</td>
                    <td class="td text-sm leading-5 text-gray-900" >BICS(April)-18</td>
                    <td class="td text-sm leading-5 text-gray-900" >2</td>
                    <td class="td text-sm leading-5 text-gray-900" >ICS 2102</td>
                    <td class="td text-sm leading-5 text-gray-900" >Web Application Development</td>
                    <td class="td text-sm leading-5 text-gray-900" >OB</td>
                    <td class="td text-sm leading-5 text-gray-900" >75</td>
                    <td class="td text-sm leading-5 text-gray-900" >A</td>
                    <td class="td text-sm leading-5 text-gray-900" >3</td>
                    <td class="td text-sm leading-5 text-gray-900" >4.00</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
              </tbody>
             
            </table>
          </div>
        </div>
    </div>
</body>
</html>
@endsection
