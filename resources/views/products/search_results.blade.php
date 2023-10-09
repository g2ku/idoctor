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
    <a href="{{route('products.search')}}" type="text" class="home">
        Back
    </a>

    <h1 class="idoctor">IDoctor</h1>

    <h3>Результаты поиска продуктов</h3>

    <div class="all-label">
        <p class="label-name">Имя Фамилия</p>
        <p class="label-price">Цена</p>
        <p class="label-tags">Специализация</p>
    </div>

    @foreach ($products as $product)
        <table class="doctors-list">
            <tr class="doctor">
                <td class="name">
                    {{ $product->name }}
                </td>
                <td class="cost">{{ $product->products }}</td>
                <td class="tag_doctors">{{ $product->tag }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">
                        Инфо
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
    </body>
    </form>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Nunito', sans-serif;
        }
        .home
        {
            text-decoration: none;
            color: black;
            font-size: 22px;
            text-align: center  ;
        }
        .idoctor
        {
            color: #0d6efd;
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-size: 120px;
            font-weight: bold;
        }

        .doctor
        {
            display: flex;
            font-size: 20px;
            border: 1px solid #ccc;
        }
        .doctors-list
        {
            width: 100%;
            border-collapse: collapse;
        }
        .doctors-list tr {
            height: 50px;
        }
        .doctors-list td {
            padding: 10px;
            vertical-align: middle;
        }
        .name
        {
            width: 40%;
        }
        .cost
        {
            width: 30%;
            margin-left: 60vh;
        }
        .tag_doctors
        {
            width: 30%;
            margin-left: 10vh;
        }

        .all-label
        {
            display: flex;
            flex-direction: row;
            font-size: 25px;
        }
        .label-price
        {
            margin-left: 560px;
        }
        .label-tags
        {
            margin-left: 190px;
        }

    </style>

@endsection
