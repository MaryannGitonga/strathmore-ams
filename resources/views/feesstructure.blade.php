@extends('laratrust::panel.layout')

@section('title', 'Fee structure')

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
                <a href="{{route('feesstructure.index')}}"
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered" id="selected">
                    Fee Structures
                </a>
                <a href="{{route('fees_statements', '2021')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available">
                    Fee Statements
                </a>
            </div>
          <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
        <table class="min-w-full">
          <thead>
              <tr>
                <td colspan="2" class="th">
                    <h5>Current Semester: May 2021</h5>
                </td>
              </tr>
            <tr>
                <th class="th theading">Student Year</th>
                <th class="th theading">Fee Structure</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                <td class="td text-sm leading-5 text-gray-900">2</td>
                <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/web/../storage/FeeStructures/2223.pdf" target="_new" style="color: #013676;">Download Fee Structure</a></td>
            </tr>
            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                <td class="td text-sm leading-5 text-gray-900">3</td>
                <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/web/../storage/FeeStructures/2222.pdf" target="_new" style="color: #013676;">Download Fee Structure</a></td>
            </tr>
            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                <td class="td text-sm leading-5 text-gray-900">4</td>
                <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/web/../storage/FeeStructures/2224.pdf" target="_new" style="color: #013676;">Download Fee Structure</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
</body>
</html>

@endsection
