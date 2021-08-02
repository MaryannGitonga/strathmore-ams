<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fee Statements PDF</title>
    <style>
        #download, #fees{
            margin: auto;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            font-size: 14px;
        }
        table{
            margin-bottom: 20px;
        }
        thead{
            background-color: #aaa;
            color: #000;

        }
        th tr td{
            font-weight: bold;
        }
        th{
            color: #000;
            background-color: #aaa;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        td, th{
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div id="download">
        <h2 style="text-align: center">STRATHMORE UNIVERSITY<br>STUDENT STATEMENT</h2>
        <h3>Student ID: {{Auth::user()->student->admission_no}}</h3>
        <h3>Student Name: {{Auth::user()->name}}</h3>
        <h3>Statement Date: {{Illuminate\Support\Carbon::now()->toFormattedDateString()}}</h3>
        <table id="fees">
            <thead>
                <tr>
                    <td rowspan="2">Date</td>
                    <td rowspan="2">Document Number</td>
                    <td rowspan="2">Receipt Type</td>
                    <td colspan="2" style="text-align: center">Amount</td>
                </tr>
                <tr>
                    <td>Debit</td>
                    <td>Credit</td>
                </tr>
            </thead>
            <tbody>
                <div style="display: none">
                    {{ $invoice = 0 }}
                    {{ $receipt = 0}}
                </div>
                @foreach ($fees as $fee)
                <tr>
                    <td>{{$fee->date}}</td>
                    <td>{{$fee->document_number}}</td>
                    <td style="text-transform: capitalize">{{$fee->document_type}}</td>
                    <td>{{$fee->document_type == 'invoice'? number_format($fee->amount, 2, '.'): number_format(0.00, 2, '.')}}</td>
                    <td>{{$fee->document_type == 'receipt'? number_format($fee->amount, 2, '.'): number_format(0.00, 2, '.')}}</td>
                    <div style="display: none">{{$fee->document_type == 'invoice'? $invoice += $fee->amount: 0.00}}</div>
                    <div style="display: none">{{$fee->document_type == 'receipt'? $receipt += $fee->amount: 0.00}}</div>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" style="font-weight: bold">Total</td>
                    <td style="font-weight: bold">{{number_format($invoice, 2, '.')}}</td>
                    <td style="font-weight: bold">{{number_format($receipt, 2, '.')}}</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-weight: bold">Balance</td>
                    <td colspan="2" style="font-weight: bold">{{number_format($receipt-$invoice, 2, '.')}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
