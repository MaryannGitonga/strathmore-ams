<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progress Report PDF</title>
    <style>
        #download, #fees, #reports{
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
        <h2 style="text-align: center">STRATHMORE UNIVERSITY<br>PROGRESS REPORT</h2>
        <h3>Student ID: {{Auth::user()->student->admission_no}}</h3>
        <h3>Student Name: {{Auth::user()->name}}</h3>
        <h3>Statement Date: {{Illuminate\Support\Carbon::now()->toFormattedDateString()}}</h3>
        <table id="reports">
            <thead>
                <tr>
                    <td>Year</td>
                    <td>Unit Code</td>
                    <td>Unit Name</td>
                    <td>Mark</td>
                    <td>Grade</td>
                    <td>Credits</td>
                    <td>GPV</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($scores as $score)
                <tr>
                    <td>{{$score[0]}}</td>
                    <td>{{$score[1]}}</td>
                    <td>{{$score[2]}}</td>
                    <td>{{$score[3]}}</td>
                    <td>{{$score[4]}}</td>
                    <td>{{$score[5]}}</td>
                    <td></td>
                </tr>
                @endforeach
                <?php
                    $total = 0;
                    $grade = '';
                    $units = count($scores);

                    foreach ($scores as $score) {
                        $total += $score[3];
                    }
                    $average_mark = number_format(($total/ $units), 2, '.');

                    if ($average_mark < 40) {
                        $grade = 'E';
                    }elseif ($average_mark >= 40 && $average_mark < 50) {
                        $grade = 'D';

                    }elseif ($average_mark >= 50 && $average_mark < 60) {
                        $grade = 'C';

                    }elseif ($average_mark >= 60 && $average_mark < 70) {
                        $grade = 'B';

                    }elseif ($average_mark >= 70) {
                        $grade = 'A';
                    }
                ?>
                <tr>
                    <td colspan="4">Average Mark</td>
                    <td colspan="3">{{$average_mark}}</td>
                </tr>
                <tr>
                    <td colspan="4">Average Grade</td>
                    <td colspan="3">{{$grade}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
