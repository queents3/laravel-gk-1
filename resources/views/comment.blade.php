<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variablen ausgeben</title>
</head>
<body>
    {{-- Variablen 1. ausgeben und 2. interpretieren --}}
    <p>{{$kommentar}}</p>
    <p>{!! $kommentar !!}</p>

    {{-- Kontrollstrukturen --}}
    <p>
        @if ($songs===1)
            ein Song
        @elseif ($songs > 1)
            mehrere Songs
        @else
            kein Song
        @endif
    </p>

    <p>
        {{-- negatives if --}}
        @unless ($loggedin)
            Nicht eingellogt!
        @endunless
    </p>
    <hr>

    {{-- Schleifen --}}
    @for ($i = 0; $i < 4; $i++)
        <p>Der aktuelle Wert ist {{$i}}</p>
    @endfor
</body>
</html>