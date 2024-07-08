<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <ul>
        @foreach ($Movies as $Movie)
            <li>
                <h3>Titolo</h3>{{ $Movie->title }} - {{ $Movie->original_title }}
            </li>
            <li>
                <span>Nazionalità: </span>{{ $Movie->nationality }}
            </li>
            <li>
                <span> Data di pubblicazione: </span>{{ $Movie->date }}
            </li>
            <li>
                <span> Voto: </span>{{ $Movie->vote }}
            </li>
        @endforeach
    </ul>

</body>

</html>
