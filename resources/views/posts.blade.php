<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Blog</title>
    <!-- CSS only -->
    <!-- Bootstrap-CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom-CSS -->
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Artikel {{$page}}</h1>        {{-- localhost:8000/posts --}} {{-- localhost:8000/posts?page=2&user=6 --}}
    <p>erstellt durch User Nr. {{$user}}</p>
</html>
