<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .text_center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="text_center">Hello Laravel</h1>
    <h2 class="text_center">My name is {{ $fullname }}</h2>

    <a href="{{ route('posts') }}">Home</a>
</body>

</html>