<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Richiesta ricevuta</h1>
    <h4>Richiesta per il ruolo {{$info['role']}}</h4>
    <p>Ricevuta da {{$info['email']}}</p>
    <h4>Messaggio: </h4>
    <p>{{$info['presentation']}}</p>
</body>
</html>