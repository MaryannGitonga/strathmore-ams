@extends('laratrust::panel.layout')

@section('title', 'Graduation Registration')

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
        @if ($ready_to_graduate)
            <div class="alert alert-danger">
                <p>You have not completed all the required units to be legible for graduation.</p>
            </div>
        @else
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full" style="margin-bottom: 20px">
                        <thead>Instructions & Guidlines</thead>
                        <tbody class="bg-white">
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0">
                            <td class="td text-sm leading-5 text-gray-900">1</td>
                            <td class="td text-sm leading-5 text-gray-900"><a href= "https://su-sso.strathmore.edu/storage/GraduationPolicies/GraduationRegulations.pdf"target="_new" style="color: #013676;">Graduation Policy Guidelines (view pdf)</a></td>
                        </tr>
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0">
                            <td class="td text-sm leading-5 text-gray-900">2</td>
                            <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/storage/GraduationPolicies/GraduationInstructions.pdf" target="_new" style="color: #013676;">Graduation Application Instructions (view pdf)</a></td>
                        </tr>
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0">
                            <td class="td text-sm leading-5 text-gray-900">3</td>
                            <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/storage/GraduationPolicies/GraduationNotice.pdf" target="_new" style="color: #013676;">Notice to Graduating Students (view pdf)</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class ="btn">
                        <a type="submit" href="{{ route('graduation_form') }}"
                        class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered ml-4 registered">
                            Proceed to the next step.
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</body>
</html>

@endsection
