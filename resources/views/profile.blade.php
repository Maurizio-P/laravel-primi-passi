<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!</title>
</head>
<body>
    <main>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/profile">Profilo</a></li>
            </ul>
        </nav>

        @if(isset($nome))
        <h1>
            Bentornato
        </h1>

            <h3>
                Ciao, {{$nome}} {{$cognome}}
            </h3>
        @else
        <h1> Login fallito </h1>

        <h3> Torna alla <a href="/">Home</a>
        @endif


    </main>
</body>
</html>