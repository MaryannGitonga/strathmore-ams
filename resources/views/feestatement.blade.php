@extends('laratrust::panel.layout')

@section('title', 'Fees Statement')

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

    .ordinary, .retakes{
        text-decoration: none;
        color: #013676;
        font-size: 16px;
    }

    .ordinary:hover, .retakes:hover{
        text-decoration: underline;
        color: #013676;
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
                class="self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered">
                    Fee Structures
                </a>
                <a href="{{route('fees_statements', '2021')}}"
                class="ml-2 self-end text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded registered" id="selected">
                    Fee Statements
                </a>
            </div>
            <div class="mt-4 mb-2 option">
                <a type="button" href="{{route('download_statements')}}" class="ordinary p-2" style="text-decoration: none; color: #013676; font-size:13px;">Download Fee Stataments</a>
            </div>
            <hr>
            <div class="mt-4 option">
                <a href="{{route('fees_statements', '2021')}}" class="ordinary p-2">2021 Transactions</a>
                <a href="{{route('fees_statements', '2020')}}" class="retakes p-2">2020 Transactions</a>
                <a href="{{route('fees_statements', '2019')}}" class="retakes p-2">2019 Transactions</a>
              </div>
            <hr>
            <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="th theading" colspan="2">Total</th>
                            <th class="th theading">Amount (Ksh)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                            <td class="td text-sm leading-5 text-gray-900" colspan="2">Invoiced</td>
                            <td class="td text-sm leading-5 text-gray-900">{{number_format($invoice_total)}}</td>
                        </tr>
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                            <td class="td text-sm leading-5 text-gray-900" colspan="2">Paid</td>
                            <td class="td text-sm leading-5 text-gray-900">{{number_format($receipt_total)}}</td>
                        </tr>
                        <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                            <td class="td text-sm leading-5 text-gray-900" colspan="2">Balance</td>
                            <td class="td text-sm leading-5 text-gray-900">{{number_format($invoice_total - $receipt_total)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                  <thead>
                    <tr>
                        <th class="th" colspan="3">
                            <h5>Invoices</h5>
                        </th>
                    </tr>
                    <tr>
                        <th class="th theading">Date</th>
                        <th class="th theading">Document Number</th>
                        <th class="th theading">Amount (Ksh)</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    <div style="display: none">
                        {{ $total = 0 }}
                    </div>
                    @foreach ($invoices as $fee)
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                        <td class="td text-sm leading-5 text-gray-900">{{Illuminate\Support\Carbon::parse($fee->date)->toFormattedDateString()}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$fee->document_number}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{number_format($fee->amount)}}</td>
                        <div style="display: none">{{$total += $fee->amount}}</div>
                    </tr>
                    @endforeach
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                        <td colspan="2" class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Total Invoiced</td>
                        <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">{{number_format($total)}}</td>
                        <div style="display: none">{{$total = 0}}</div>
                    </tr>
                  </tbody>
                  <thead>
                    <tr>
                        <th class="th" colspan="3">
                            <h5 class="mt-3">Receipts</h5>
                        </th>
                    </tr>
                    <tr>
                        <th class="th theading">Date</th>
                        <th class="th theading">Document Number</th>
                        <th class="th theading">Amount (Ksh)</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach ($receipts as $fee)
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0;">
                        <td class="td text-sm leading-5 text-gray-900">{{Illuminate\Support\Carbon::parse($fee->date)->toFormattedDateString()}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{$fee->document_number}}</td>
                        <td class="td text-sm leading-5 text-gray-900">{{number_format($fee->amount)}}</td>
                        <div style="display: none">{{$total += $fee->amount}}</div>
                    </tr>
                    @endforeach
                    <tr class="tr" style="border-bottom: 0.08em solid #e2e8f0; background-color: #e2e8f0">
                        <td colspan="2" class="td text-sm leading-5 text-gray-900" style="font-weight: bold">Total Paid</td>
                        <td class="td text-sm leading-5 text-gray-900" style="font-weight: bold">{{number_format($total)}}</td>
                        <div style="display: none">{{$total = 0}}</div>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</body>
</html>
@endsection
