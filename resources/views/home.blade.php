<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello World!!!</h1>

    <p>Ciao {{ $name }} {{ $lastname }}</p>

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

</body>
</html>