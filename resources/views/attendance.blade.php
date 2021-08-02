@extends('layouts.layout')

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
          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
              <thead>
                <tr>
                    <th class="th" colspan="8">
                        <h5>First Semester</h5>
                    </th>
                </tr>
                @if (empty($first_semester))
                <tr class="tr">
                    <td colspan="8" style="padding-top: 20px;">There are no units registered for this semester.</td>
                </tr>
                @else
                <tr>
                    <th class="th theading">Unit Code</th>
                    <th class="th theading">Unit Name</th>
                    <th class="th theading">Lecturer</th>
                    <th class="th theading">Total Hours</th>
                    <th class="th theading">Absent Hours</th>
                    <th class="th theading">Absent Classes</th>
                    <th class="th theading">Percent Absent</th>
                    <th class="th theading"></th>
                </tr>
              </thead>
              <tbody class="bg-white">
                  @foreach ($first_semester as $unit)
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                        <td class="td text-sm leading-5 text-gray-900">{{$unit->unit_code}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$unit->name}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$unit->lecturer->name}}</td>
                        <?php
                            $records = $unit->attendance_records()->get();
                            $total_hrs = 0;
                            $absent_hrs = 0;
                            $absent_classes = 0;
                            $percent_absent = 0;
                            if (count($records) != 0) {
                                foreach ($records as $record) {
                                    $total_hrs += (Illuminate\Support\Carbon::parse($record->end_time)->diffInHours(Illuminate\Support\Carbon::parse($record->start_time)));
                                    if ($record->absent) {
                                        $absent_hrs += (Illuminate\Support\Carbon::parse($record->end_time)->diffInHours(Illuminate\Support\Carbon::parse($record->start_time)));
                                        $absent_classes += 1;
                                    }
                                }
                                $percent_absent = number_format(($absent_hrs/$total_hrs) * 100, 2, '.');
                            }
                        ?>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$total_hrs}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$absent_hrs}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$absent_classes}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$percent_absent}}%</td>
                        <td class="td text-sm leading-5 text-gray-900"><a href="{{route('attendance_details', $unit->id)}}" style="color: #013676;">View Details</a></td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
              <thead>
                <tr>
                    <th class="th" colspan="8">
                        <h5>Second Semester</h5>
                    </th>
                </tr>
                @if (empty($second_semester))
                    <tr class="tr">
                        <td colspan="8" style="padding-top: 20px;">There are no units registered for this semester.</td>
                    </tr>
                @else
                <tr>
                    <th class="th theading">Unit Code</th>
                    <th class="th theading">Unit Name</th>
                    <th class="th theading">Lecturer</th>
                    <th class="th theading">Total Hours</th>
                    <th class="th theading">Absent Hours</th>
                    <th class="th theading">Absent Classes</th>
                    <th class="th theading">Percent Absent</th>
                    <th class="th theading"></th>
                </tr>
              </thead>
              <tbody class="bg-white">
                @foreach ($second_semester as $unit)
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                        <td class="td text-sm leading-5 text-gray-900">{{$unit->unit_code}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$unit->name}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$unit->lecturer->name}}</td>
                        <?php
                            $records = $unit->attendance_records()->get();
                            $total_hrs = 0;
                            $absent_hrs = 0;
                            $absent_classes = 0;
                            $percent_absent = 0;
                            if (count($records) != 0) {
                                foreach ($records as $record) {
                                    $total_hrs += (Illuminate\Support\Carbon::parse($record->end_time)->diffInHours(Illuminate\Support\Carbon::parse($record->start_time)));
                                    if ($record->absent) {
                                        $absent_hrs += (Illuminate\Support\Carbon::parse($record->end_time)->diffInHours(Illuminate\Support\Carbon::parse($record->start_time)));
                                        $absent_classes += 1;
                                    }
                                }
                                $percent_absent = number_format(($absent_hrs/$total_hrs) * 100, 2, '.');
                            }
                        ?>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$total_hrs}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$absent_hrs}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$absent_classes}}</td>
                        <td class="td text-sm leading-5 text-gray-900 d">{{$percent_absent}}%</td>
                        <td class="td text-sm leading-5 text-gray-900"><a href="{{route('attendance_details', $unit->id)}}" style="color: #013676;">View Details</a></td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
</body>
</html>
@endsection
