<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio (kompatibil mit card.blade.php)</title>
</head>
<body>
    {{-- bennante Komponente, Name der Komponenten-Datei --}}
    @component('card')
        {{-- benannter Slot, Name der so bennanten Variable in der Komponente: hier $title --}}
        @slot('title')
            Titel der Karte.
        @endslot
        {{-- unbekannter Slot - Inhalt wird dem Platzhalter $slot zugeordnet--}}
        Inhalt der Karte.<br><br>
    @endcomponent

    <h4 style="color:blue;">
    @component('card')
    @slot('title')
        Ein neuer Titel der Karte.
        @endslot
    </h4>
    <h4 style="color:red;">
        ein anderer Inhalt der Karte.
        @endcomponent
    </h4>

</body>
</html>