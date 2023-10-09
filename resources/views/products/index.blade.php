@extends('base')
@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <div class="box-all">
                <a href="{{route('products.index')}}" type="text" class="home">
                    Home
                </a>

            </div>


        <div style="padding-bottom: 10px">
            <h1 class="idoctor">IDoctor</h1>
        </div>
        <a href="{{ route('products.search') }}" class="button-doctor">Выбрать Доктора</a>



        <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Nunito, sans-serif;
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
            font-size: 160px;
            margin-top: 100px;
            font-weight: bold;
        }
        .button-doctor
        {
            background-color: #0d6efd;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 40px 545px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
            border-radius: 10%;
        }
        .button-doctor:hover {opacity: 1}

        .login
        {
            text-decoration: none;
            color: blue;
            font-size: 24px;
            margin-left: 164vh;
        }

        .box-all
        {
            display: inline-block;
        }

    </style>




@endsection
