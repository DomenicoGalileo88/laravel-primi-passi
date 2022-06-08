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

        .bg_blue {
            background-color: cornflowerblue;
        }

        a {
            text-decoration: none;
            color: white;
            margin-right: 1rem;
        }
    </style>
</head>

<body>
    <nav class="text_center bg_blue">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('posts') }}">Posts</a>

    </nav>

    <main>
        <h1 class="text_center">Learn posts:</h1>
        @foreach($languages as $language)
        <h2 class="text_center"> {{ $language }}</h2>
        @endforeach
    </main>

</body>

</html>