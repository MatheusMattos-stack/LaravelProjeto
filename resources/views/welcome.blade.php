@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body class="antialiased">
            <h1>Algum Titulo</h1>
            <img src="/img/banner.jpg" alt="Banner">
            @if(10 > 5)
                <p>A condição é true</p>
            @endif   
            <p>{{ $nome }}</p>
    </body>
</html>

@endsection
