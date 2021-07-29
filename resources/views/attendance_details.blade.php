@extends('layouts.layout')

@section('title', 'Self Registration')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
  <style>
    td{
       border: 2px solid #CCCCCC;
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
                <a href="{{route('attendance', Auth::user()->student->group->year)}}"
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                &#x2190; Back
                </a>
              </div>
            @if (count($records) == 0)
            <div class="alert alert-info mt-4">
                <p>There are no attendance records in the selected unit.</p>
            </div>
            @else
          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
              <thead>
                <tr>
                    <th class="th theading">Date</th>
                    <th class="th theading">Start Time</th>
                    <th class="th theading">End Time</th>
                    <th class="th theading">Hours</th>
                    <th class="th theading">Absent</th>
                </tr>
              </thead>
              <tbody class="bg-white">
                @foreach ($records as $record)
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">{{Illuminate\Support\Carbon::parse($record->lecture_date)->toFormattedDateString()}}</td>
                    <td class="td text-sm leading-5 text-gray-900">{{Illuminate\Support\Carbon::parse($record->start_time)->toTimeString()}}</td>
                    <td class="td text-sm leading-5 text-gray-900">{{Illuminate\Support\Carbon::parse($record->end_time)->toTimeString()}}</td>
                    <?php
                        $hrs = Illuminate\Support\Carbon::parse($record->end_time)->diffInHours(Illuminate\Support\Carbon::parse($record->start_time));
                    ?>
                    <td class="td text-sm leading-5 text-gray-900">{{$hrs}}</td>
                    <td class="td text-sm leading-5 text-gray-900">{{$record->absent ? 'Yes' : 'No'}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @endif
        </div>
    </div>
</body>
</html>
@endsection
