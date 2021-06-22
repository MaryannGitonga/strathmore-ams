<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Strathmore AMS - Student\'s Module') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" href="{{ asset('/vendor/laratrust/img/logo.png') }}">

        <!-- Styles -->
        <link href="{{ asset(mix('laratrust.css', 'vendor/laratrust')) }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="app">
            @include('layouts.navigation')

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
