@extends('layouts.layout')

@section('title','Graduation Registration Form')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    .center {
  margin-right: auto;
  margin-left: auto;
}
h1{
    text-align: center;
    color: #013676;
}
p{
    text-align: center;
}
.btn{
    text-align: center;
}



    </style>
    <title>Graduation registration form</title>
</head>
<body>
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        @if (Auth::user()->student->admission_no)

        @endif

         <h1 class="heading">GRADUATION REGISTRATION FORM</h1>
        <p>Graduation session currently not open. Contact your administrator.</p>
         <p>Read through the University graduation requirements and instructions below: (Tick the check-boxes when complete)</p>

        <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
        <table class="center">

            <tbody class="bg-white">
                <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                  <td class="td text-sm leading-5 text-gray-900">1</td>
                  <td class="td text-sm leading-5 text-gray-900"><a href= "https://su-sso.strathmore.edu/storage/GraduationPolicies/GraduationRegulations.pdf"target="_new" style="color: #013676;">Graduation Policy Guidelines(view pdf)</a></td>
                    <td><input type="checkbox" name="check1" id="check1"></td>
              </tr>
              <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                  <td class="td text-sm leading-5 text-gray-900">2</td>
                  <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/storage/GraduationPolicies/GraduationInstructions.pdf" target="_new" style="color: #013676;">Graduation Application Instructions(view pdf)</a></td>
                  <td><input type="checkbox" name="check1" id="check1"></td>
              </tr>
              <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                  <td class="td text-sm leading-5 text-gray-900">3</td>
                  <td class="td text-sm leading-5 text-gray-900"><a href="https://su-sso.strathmore.edu/storage/GraduationPolicies/GraduationNotice.pdf" target="_new" style="color: #013676;">Notice to Graduating Students</a></td>
                  <td><input type="checkbox" name="check1" id="check1"></td>
              </tr>
            </tbody>
          </table>

          <div class ="btn">
          <button type="submit" href=""
          class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered ml-4">
              Proceed to the next step.
          </button>
          </div>
    </div>
</body>
</html>


