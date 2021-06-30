@extends('laratrust::panel.layout')

@section('title', 'Attendance')

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
                <a href="{{route('attendance', Auth::user()->student->group->year)}}"
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered" id="selected">
                    2021-2022
                </a>
                <a href="{{route('attendance', (Auth::user()->student->group->year) - 1)}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    2020-2021
                </a>
                <a href="{{route('attendance', (Auth::user()->student->group->year) - 2)}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available" >
                    2019-2020
                </a>
            </div>
            <div class="mt-4 mb-2 option">
                <a href="#" class="ordinary p-2" style="text-decoration: none; color: #013676;">Download Coursework Marks</a>
            </div>
            <hr>
          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
              <thead>
                <tr>
                    <th class="th theading" colspan="8">
                        <h5>First Semester</h5>
                    </th>
                </tr>
                <tr>
                    <th class="th">Unit Code</th>
                    <th class="th">Unit Name</th>
                    <th class="th">Lecturer</th>
                    <th class="th">Total Hours</th>
                    <th class="th">Absent Hours</th>
                    <th class="th">Absent Classes</th>
                    <th class="th">Percent Absent</th>
                    <th class="th"></th>
                </tr>
              </thead>
              <tbody class="bg-white">
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Data Structures & Algorithms</td>
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">95</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
              </tbody>
              <thead>
                <tr>
                    <th class="th theading" colspan="3">
                        <h5>Second Semester</h5>
                    </th>
                </tr>
              </thead>
              <tbody class="bg-white">
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Advanced Networking</td>
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">95</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 1</td>
                    <td class="td text-sm leading-5 text-gray-900">25/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 2</td>
                    <td class="td text-sm leading-5 text-gray-900">28/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Computer Organization & Architecture</td>
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">80</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 1</td>
                    <td class="td text-sm leading-5 text-gray-900">24/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 2</td>
                    <td class="td text-sm leading-5 text-gray-900">22/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Internet Application Programming</td>
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">74</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 1</td>
                    <td class="td text-sm leading-5 text-gray-900">25/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">Project</td>
                    <td class="td text-sm leading-5 text-gray-900">20/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Operating Systems</td>
                    <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">90</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 1</td>
                    <td class="td text-sm leading-5 text-gray-900">28/30</td>
                    <td class="td text-sm leading-5 text-gray-900"></td>
                </tr>
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">CAT 2</td>
                    <td class="td text-sm leading-5 text-gray-900">28/30</td>
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
