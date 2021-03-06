<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}">My Homepage</a>
            </li>
            <li>
                <a href="{{ route('user_info') }}">My Info</a>
            </li>
        </ul>
    </nav>

    <main>
        <h1>Lista dati di {{ $name }} {{ $lastname }}</h1>
        <ul>
            <li>
                <strong>Nome:</strong>
                <span>{{ $name }}</span>
            </li>
            <li>
                <strong>Cognome:</strong>
                <span>{{ $lastname }}</span>
            </li>
            @foreach ($info_array as $key => $info)
                <li>
                    <strong>{{ ucfirst($key) }}:</strong>
                    <span>{{ $info }}</span>
                </li>
            @endforeach
        </ul>
    </main>

</body>
</html>