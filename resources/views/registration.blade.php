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
                <a href="{{route('registration')}}"
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered" id="selected">
                    Registered Units
                </a>
                <a href="{{route('available')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available">
                Available Units
            </a>
              </div>
          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <div class="mt-2 -mb-2 option">
                <a href="{{route('registration')}}" class="ordinary p-2" style="text-decoration: none; color: #013676;">Ordinary</a>
                <a href="{{route('retake')}}" class="retakes p-2" style="text-decoration: none; color: #013676;">Retakes/Specials</a>
              </div>
              <hr>
            <table class="min-w-full">
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
                @foreach ($registered_units as $unit)
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                    <td class="td text-sm leading-5 text-gray-900">{{$unit->unit_code}}</td>
                    <td class="td text-sm leading-5 text-gray-900">{{$unit->name}}</td>
                    <td class="td text-sm leading-5 text-gray-900 d">{{$unit->year}}</td>
                    <td class="td text-sm leading-5 text-gray-900 d">{{$unit->credits}}</td>
                    <td class="td text-sm leading-5 text-gray-900">
                        {{$unit->students()->where('student_id', Auth::user()->student->id)->first()->group->name}}
                    </td>
                    <td class="td text-sm leading-5 text-gray-900">
                    @if($unit->semester == 1)
                      First Semester
                    @elseif ($unit->semester == 2)
                        Second Semester
                    @endif
                    </td>
                    <td class="td text-sm leading-5 text-gray-900" style="text-transform: capitalize">
                        @if ($unit->students()->where('student_id', Auth::user()->student->id)->first()->pivot->status == 'pending')
                            Awaiting Exam
                        @endif
                    </td>
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
