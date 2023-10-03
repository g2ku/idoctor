@extends('base')

@section('content')

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <title>IDoctor</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>
    <a href="{{route('products.index')}}" type="text" class="home">
        Home
    </a>

    <h1 class="idoctor">IDoctor</h1>

    @if (isset($query))
        <p>Вы искали: "{{$query}}"</p>
    @endif

    @foreach ($results as $result)
    @endforeach

    {{ $results->links() }}

    </body>
    @endsection
