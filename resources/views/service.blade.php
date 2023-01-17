{{-- Kompatibil mit components/card.blade.php --}}

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service</title>
</head>
<body>
    {{-- <x-name der Komponenten (hier: card)> z.B. <x-card> --}}
        {{-- x-card = components-Ordner --}}
        {{-- bennanter Slot als Attribut in x-Tag angeben, unbenanter als Inhalt des x-Tags --}}
    <x-card title="Eine neue Komponente">mein Angebot</x-card>
    <x-card title="Eine neues Angebot">mein neues Angebot</x-card>
    <x-card title="Hammer-Angebot">Boah</x-card>
    <x-card title="brauchst du dringend">ja, genau</x-card>
</body>
</html>