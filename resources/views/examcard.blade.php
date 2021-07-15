@extends('laratrust::panel.layout')

@section('title', 'Exam Card')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="app">
            <main class="py-4">
                <div class="container">
                    <p style="font-weight:bold; font-size: 20px">PLEASE NOTE: </p>
                    <ul style="color: red; font-size: 18px; list-style-type: disc;">
                        <li>All your fee balance needs to be cleared for you to be eligible to sit for ordinary exams</li>
                        <li>You will not be eligible to sit for an exam if your attendance for the unit is less than two thirds of the total hours</li>
                    </ul>
                </div>
            </main>
        </div>
    </body>
</html>
@endsection
