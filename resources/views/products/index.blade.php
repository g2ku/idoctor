@extends('base')
@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="box-all">
                <a href="{{route('products.index')}}" type="text" class="home">
                    Home
                </a>

            </div>
        <div class="box-all">
            <select class="cities">
                <option hidden disabled selected>Выберите город</option>
                <option value="0">Атырау</option>
                <option value="1">Алматы</option>
                <option value="2">Астана</option>
                <option value="3">Шымкент</option>
                <option value="4">Актобе</option>
                <option value="5">Актау</option>
            </select>
        </div>
        <div class="box-all">
            <a href="{{route('products.create')}}" class="login">
                Login
            </a>
        </div>
        <div style="padding-bottom: 10px">
            <h1 class="idoctor">IDoctor</h1>
        </div>

        <form class="search-box" method="GET" action="{{ route('products.search') }}">
            <input type="text" id="query" name="query" class="search-txt"
                   value="{{ old('query') }}" placeholder="Type to search"/>
            <button type="submit" class="search-btn">it
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>

    <style>
        * {
            margin: 0;
            padding: 0;
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
            font-size: 100px;
        }
        .cities
        {
            appearance: none;
            background-color: transparent;
            border: none;
            padding: 0 1em 0 0;
            font-family: inherit;
            cursor: inherit;
            line-height: inherit;
            outline: none;
            margin-left: 3vh;
            font-size: 18px;
        }
        .cities::-ms-expand {
            display: none;
        }

        .search-box {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #0d6efd;
            height: 60px;
            border-radius: 40px;
            padding: 10px;
        }
        .search-box:hover > .search-txt {
            width: 640px;
            padding: 0 6px;
        }
        .search-box:hover > .search-btn {
            background: white;
            color: black;
        }
        .search-btn {
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.4s;
            color: white;
            cursor: pointer;
            text-decoration:none;
        }
        .search-btn > i {
            font-size: 20px;
        }
        .search-txt {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: white;
            font-size: 16px;
            transition: 0.4s;
            line-height: 40px;
            width: 0px;
            font-weight: bold;
        }
        ::-webkit-input-placeholder
        {
            color:   white;
        }
        .login
        {
            text-decoration: none;
            color: blue;
            font-size: 24px;
            margin-left: 139vh;
        }

        .box-all
        {
            display: inline-block;
        }

    </style>




@endsection
