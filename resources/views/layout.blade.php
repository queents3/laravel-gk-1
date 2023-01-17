{{-- child.blade.php --}}

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master / Child Template</title>
</head>
<body>
    <nav>
        <p><a href="/child">Child 1</a> | <a href="/child2">Child 2</a></p>
    </nav>
    @section('sidebar')
        <h2>Die Zentrale Sidebar aus dem Master(Parent) - <i>layout.blade.php</i></h2>
    @show {{-- gleich anzeigen --}}

    {{-- section('content') aus child.blade.php ausgeben lassen--}}
    <div style="background: rgb(255, 204, 234)">
        @yield('content')
    </div>
</body>
</html>