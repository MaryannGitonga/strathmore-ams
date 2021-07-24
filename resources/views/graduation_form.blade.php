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
        @if ($graduation)
            <div class="alert alert-success">
                <p>Your graduation form has been submitted successfully. We will get back to you shortly.</p>
            </div>
        @else
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
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-32">
            <div class="alert alert-info">
                <p>Please ensure that your <b>Name, Email Address and Phone Number</b> are correctly keyed in. You can confirm <a href="{{ route('account.profile') }}">here</a>.</p>
            </div>
          <form
            method="POST"
            action="{{ route('accept_form') }}"
            class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 p-8"
          >
            @csrf
            <label class="block">
              <span class="text-gray-700">First Major</span>
              <input
                class="form-input mt-1 block w-full"
                name="first_major"
                placeholder="First Major"
              >
              @error('name')
                  <div class="text-red-500 text-sm mt-1">{{ $message}} </div>
              @enderror
            </label>

            <label class="block my-4">
              <span class="text-gray-700">Second Major</span>
              <input
                class="form-input mt-1 block w-full"
                name="second_major"
                placeholder="Second Major (if any)"
              >
            </label>
              <span class="block text-gray-700">Do you intend to attend the graduation ceremony</span>
              <div class="flex flex-wrap justify-start mb-4">
                  <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                    <input
                      type="checkbox"
                      class="form-checkbox h-4 w-4"
                      name="graduation_attendance"
                      value="Yes"
                    >
                    <span class="ml-2">Yes</span>
                  </label>
                  <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                    <input
                      type="checkbox"
                      class="form-checkbox h-4 w-4"
                      name="graduation_attendance"
                      value="No"
                    >
                    <span class="ml-2">No</span>
                  </label>
              </div>
              <label class="block my-4">
                <span class="text-gray-700">If not, please state the reason</span>
                <textarea
                  class="form-textarea mt-1 block w-full"
                  rows="3"
                  name="reason"
                  placeholder="Please indicate your reason"
                ></textarea>
              </label>
              <span class="block text-gray-700">I testify that I have satisfied all the requirements for the graduation and accept all terms and conditions.</span>
              <div class="flex flex-wrap justify-start mb-4">
                  <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                    <input
                      type="checkbox"
                      class="form-checkbox h-4 w-4"
                      name="agreement"
                      value="Yes"
                    >
                    <span class="ml-2">Yes</span>
                  </label>
              </div>
            <div class="flex justify-end">
              <button class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered ml-4" type="submit">Send</button>
            </div>
          </form>
        </div>
        @endif
      </div>
</body>
</html>

@endsection
