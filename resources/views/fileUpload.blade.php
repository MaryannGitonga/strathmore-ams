@extends('laratrust::panel.layout')

@section('title', 'Personal Details')

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
        color: #013676;
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


  </style>
</head>
<body>
    <div class="flex flex-col">
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Seems like there were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (Auth::user()->student->result_slip != null && Auth::user()->student->ID_copy != null)
                <div class="alert alert-info">
                    <p>You are upto date. We already have your documents.</p>
                </div>
        @else
            <div class="alert alert-danger">
                <p>Unfortunately, we do not have your documents. Please upload.</p>
            </div>
        @endif
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="unit-section flex mt-3">
                <a href="{{route('account.profile')}}"
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered ">
                    Personal Details
                </a>
                <a href="{{route('file.upload')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded available">
                    Documents
                </a>
            </div>
            <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <form method="post" enctype="multipart/form-data" style="padding-bottom: 40px" action="{{route('save_files', Auth::user()->student->id)}}">
                    @csrf
                    @method('POST')
                    <table class="min-w-full" style="margin-bottom: 20px">
                        <thead>
                          <tr>
                              <th class="th theading">Please Upload the files below</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Secondary school results slip</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="file" name="result_slip" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">National ID/Passport/Birth certificate</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="file" name="ID_copy" id="inpId">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" href=""
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered ml-4">
                    Save Documents
                </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
