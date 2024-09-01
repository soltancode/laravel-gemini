<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & Gemini - Soltan Abilgasimzada</title>
    </head>
    <body>
        @if(isset($question))
        <p>Mən: {{ $question }}</p>
        <p>Gemini: {{ $answer }}</p>
        @endif
        <form action="/" method="POST">
            <input placeholder="Sualınızı bura yazın..." type="text" name="question" />
            @csrf
            <button type="submit">Soruş</button>
        </form>
    </body>
</html>
