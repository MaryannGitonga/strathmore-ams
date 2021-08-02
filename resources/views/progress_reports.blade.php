@extends('layouts.layout')

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
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered" id="selected">
                    Completed Units
                </a>
                <a href="{{route('pending_units')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    Pending Units
                </a>
                <a href="{{ route('units_not_done') }}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    Compulsory Units Not Done
                </a>
                <a href="#"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    Specialization Units Not Done
                </a>
                <a href="#"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    Exemptions
                </a>
            </div>
            <div class="mt-4 mb-2 option">
                <a type="button" href="{{route('download_reports')}}" class="ordinary p-2" style="text-decoration: none; color: #013676; font-size:13px;">Download Progress Report</a>
            </div>
            <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <?php
                        $total = 0;
                        $grade = '';
                        $units = count($scores);

                        foreach ($scores as $score) {
                            $total += $score[3];
                        }
                        $average_mark = number_format(($total/ $units), 2, '.');

                        if ($average_mark < 40) {
                            $grade = 'E';
                        }elseif ($average_mark >= 40 && $average_mark < 50) {
                            $grade = 'D';

                        }elseif ($average_mark >= 50 && $average_mark < 60) {
                            $grade = 'C';

                        }elseif ($average_mark >= 60 && $average_mark < 70) {
                            $grade = 'B';

                        }elseif ($average_mark >= 70) {
                            $grade = 'A';
                        }
                    ?>
                    <thead>
                        <tr>
                            <th class="th theading" colspan="2">Overall Average</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                            <td class="td text-sm leading-5 text-gray-900">Units Completed</td>
                            <td class="td text-sm leading-5 text-gray-900">{{$units}}</td>
                        </tr>
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                            <td class="td text-sm leading-5 text-gray-900">Average Mark</td>
                            <td class="td text-sm leading-5 text-gray-900">{{$average_mark}}</td>
                        </tr>
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                            <td class="td text-sm leading-5 text-gray-900">Average Grade</td>
                            <td class="td text-sm leading-5 text-gray-900">{{$grade}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                  <thead>
                    <tr>
                        <th class="th theading">Year</th>
                        <th class="th theading">Unit Code</th>
                        <th class="th theading">Unit Name</th>
                        <th class="th theading">Mark</th>
                        <th class="th theading">Grade</th>
                        <th class="th theading">Credits</th>
                        <th class="th theading">GPV</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach ($scores as $score)
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                        <td class="td text-sm leading-5 text-gray-900">{{$score[0]}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$score[1]}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$score[2]}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$score[3]}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$score[4]}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$score[5]}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{number_format($score[6], 2, '.')}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</body>
</html>
@endsection
