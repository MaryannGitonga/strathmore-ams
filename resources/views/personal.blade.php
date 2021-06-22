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
       border: thin solid #CCCCCC;
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

    .d{
      text-align: center;
    }

    .td-heading{
        border-left: 0.2em solid #e2e8f0;
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
                <form method="post" enctype="multipart/form-data" style="padding-bottom: 40px" action="{{ route('save_details',Auth::user()->student->id) }}">
                    @csrf
                    @method('PUT')
                    <table class="min-w-full" style="margin-bottom: 20px">
                        <thead>
                          <tr>
                              <th class="th theading" colspan="4">Personal Details</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">ID/ Passport Number:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="number" value="{{Auth::user()->student->national_ID}}" name="national_ID">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Religion:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <select name="religion" id="">
                                        <option value="{{Auth::user()->student->religion}}" selected>{{Auth::user()->student->religion}}</option>
                                        <option value="African Inland Church">African Inland Church</option>
                                        <option value="Agnostic">Agnostic</option>
                                        <option value="Agnosticism">Agnosticism</option>
                                        <option value="Anglican">Anglican</option>
                                        <option value="Baptist">Baptist</option>
                                        <option value="Buddhist">Buddhist</option>
                                        <option value="Christian">Christian</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Postal Address:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="number" name="address" value="{{Auth::user()->student->address}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Postal Code:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <select name="postal_code" id="">
                                        <option value="{{Auth::user()->student->postal_code}}">{{Auth::user()->student->postal_code}}</option>
                                        <option value="40101">AHERO - 40101</option>
                                        <option value="30101">AINABKOI - 30101</option>
                                        <option value="40139">AKALA - 40139</option>
                                        <option value="50244">AMAGORO - 50244</option>
                                        <option value="20424">AMALO (FORMERLY OLOOMIRANI) - 20424</option>
                                        <option value="50403">AMUKURA - 50403</option>
                                        <option value="40309">ASUMBI - 40309</option>
                                        <option value="00204">ATHI RIVER - 00204</option>
                                        <option value="40122">AWASI - 40122</option>
                                        <option value="20113">BAHATI - 20113</option>
                                        <option value="80101">BAMBURI - 80101</option>
                                        <option value="50316">BANJA - 50316</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Town:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="text" name="home_county" value="{{Auth::user()->student->home_county}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Marital Status:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <select name="marital_status" id="">
                                        <option value="1" selected>Single</option>
                                        <option value="2">Married</option>
                                        <option value="3">Widow/Widower</option>
                                        <option value="4">Religious</option>
                                        <option value="5">Priest</option>
                                        <option value="6">Others</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Home County:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <select name="home_county" id="">
                                        <option value="{{Auth::user()->student->home_county}}">{{Auth::user()->student->home_county}}</option>
                                        <option value="Baringo">Baringo</option>
                                        <option value="Bomet">Bomet</option>
                                        <option value="Bungoma">Bungoma</option>
                                        <option value="Busia">Busia</option>
                                        <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
                                        <option value="Embu">Embu</option>
                                        <option value="Foreigner">Foreigner</option>
                                        <option value="Garissa">Garissa</option>
                                        <option value="Homa Bay">Homa Bay</option>
                                        <option value="Isiolo">Isiolo</option>
                                        <option value="Kajiado">Kajiado</option>
                                        <option value="Kakamega">Kakamega</option>
                                        <option value="Kericho">Kericho</option>
                                        <option value="Kiambu">Kiambu</option>
                                    </select>
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Mobile Number:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input name="phone" type="text" value="{{Auth::user()->student->phone}}" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Residence:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="text" name="residence" value="{{Auth::user()->student->residence}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Personal Email:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input type="email" name="personal_email" value="{{Auth::user()->student->personal_email}}" id="inpResultSlip">
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th class="th theading" colspan="4">Parents'/ Guardian's Details</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Father's Name:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="{{$father->name}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Father's Email:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="email" value="{{$father->email}}" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Father's Mobile Number:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="number" value="{{$father->phone}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Father's Occupation:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="{{$father->occupation}}" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Mother's Name:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="{{$mother->name}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Mother's Email:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="{{$mother->email}}" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Mother's Mobile Number:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="number" value="{{$mother->phone}}" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Mother's Occupation:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="{{$mother->occupation}}" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Guardian's Mobile Number:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="None" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Guardian's Occupation:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="None" id="inpResultSlip">
                                </td>
                            </tr>
                            <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                                <td class="td text-sm leading-5 text-gray-900">Guardian's Mobile Number:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="None" id="inpResultSlip">
                                </td>
                                <td class="td text-sm leading-5 text-gray-900 td-heading">Guardian's Occupation:</td>
                                <td class="td text-sm leading-5 text-gray-900">
                                    <input disabled type="text" value="None" id="inpResultSlip">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" href=""
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered ml-4">
                    Save Personal Details
                </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection






