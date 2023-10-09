<form id="tag-filter-form" method="POST" action="{{ route('products.filter') }}">
    @extends('base')
    @csrf
    @section('content')

        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

            <title>IDoctor</title>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

        </head>

        <body>
        <a href="{{route('products.index')}}" type="text" class="home">
            Home
        </a>

        <h1 class="idoctor">IDoctor</h1>

        <h2 class="choose">Выберите доктора</h2>

        <div class="filters">
            <h3 class="choose">Фильтры по тегам:</h3>
            <form id="tag-filter-form">
                @foreach ($tags as $tag)
                    <label class="tags_check">
                        <input class="checkbox" type="checkbox" name="tags[]" value="{{ $tag->id }}">
                        {{ $tag->name }}
                    </label>
                @endforeach
                <button type="submit" class="btn_submit">Применить фильтр</button>
            </form>
        </div>
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
            font-size: 150px;
            font-weight: bold;
        }
        .choose
        {
            font-size: 20px;
            width: 200px;
        }
        .filters
        {
            font-size: 14px;
            width: 200px;
        }
        .btn_submit
        {
            background-color: #0d6efd;
            border: none;
            color: white;
            padding: 10px 18px;
            text-align: center;
            font-size: 16px;
            opacity: 0.6;
            transition: 0.3s;
            text-decoration: none;
            cursor: pointer;
            border-radius: 5%;
            display: flex;
            flex-direction: column;
        }
        .btn_submit:hover {opacity: 1}
        .doctor
        {
            display: flex;
            margin-left: 30vh;
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
        .tags_check
        {
            display: flex;
            flex-direction: column;
            width: 20%;
        }
        .checkbox
        {
            position: absolute;
            left: 250px;
        }
        .all-label
        {
            display: flex;
            flex-direction: row;
            margin-left: 220px;
            font-size: 25px;
        }
        .label-price
        {
            margin-left: 470px;
        }
        .label-tags
        {
            margin-left: 140px;
        }

    </style>

@endsection
