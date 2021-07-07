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
        thead{
            background-color: #013676;
            color: #fff;
        }
        th{
            color: #fff;
            background-color: #013676;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        td, th{
            border: 1px solid #ddd;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div id="download">
        <table id="student" style="border-collapse: collapse">
            <tbody>
                <tr>
                    <th>Student Number</th>
                    <td>{{Auth::user()->student->admission_no}}</td>
                </tr>
                <tr>
                    <th>Student Name</th>
                    <td>{{Auth::user()->name}}</td>
                </tr>
            </tbody>
        </table>
        <table id="fees">
            <thead>
                <tr>
                    <td rowspan="2">Date</td>
                    <td rowspan="2">Document Number</td>
                    <td rowspan="2">Receipt Type</td>
                    <td colspan="2">Amount</td>
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
                    <td>{{$fee->document_type == 'invoice'? number_format($fee->amount): 0.00}}</td>
                    <td>{{$fee->document_type == 'receipt'? number_format($fee->amount): 0.00}}</td>
                    <div style="display: none">{{$fee->document_type == 'invoice'? $invoice += $fee->amount: 0.00}}</div>
                    <div style="display: none">{{$fee->document_type == 'receipt'? $receipt += $fee->amount: 0.00}}</div>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" style="font-weight: bold">Total</td>
                    <td style="font-weight: bold">{{number_format($invoice)}}</td>
                    <td style="font-weight: bold">{{number_format($receipt)}}</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-weight: bold">Balance</td>
                    <td colspan="2" style="font-weight: bold">{{number_format($receipt-$invoice)}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
