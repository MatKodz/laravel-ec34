<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div>
        <h2> {{ $agence->a_nom }} </h2>
        <p> {{ $agence->a_tel }}</p>
        <p><a href="{{ $agence->a_email }}">{{ $agence->a_email }}</a></p>
        <address>{{ $agence->a_adresse }}</address>
        </div>
    </body>
</html>
