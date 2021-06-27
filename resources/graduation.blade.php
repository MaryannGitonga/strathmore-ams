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
            {{-- Your code goes here --}}
        </div>
    </div>
</body>
</html>
@endsection
