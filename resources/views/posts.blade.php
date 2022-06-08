<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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

    .black {
        color: black;
    }
</style>

<body>
    <nav class="text_center bg_blue">
        <a href="{{ route('home') }}">Home</a>
    </nav>

    <div>
        <ul>
            <h1>Posts:</h1>
            <li>
                <a class="black" href="{{route('php')}}">Learn PHP</a>
            </li>

            <li>
                <a class="black" href="{{route('js')}}">Learn JS</a>
            </li>

            <li>
                <a class="black" href="{{route('css')}}">Learn CSS</a>
            </li>


        </ul>
    </div>
</body>

</html>