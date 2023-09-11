@extends('base')

@section('content')
    <a href="{{route('products.index')}}" type="text" class="home">
        Home
    </a>
    <style>
        .home
        {
            text-decoration: none;
            color: black;
            font-size: 22px;
            margin-bottom: 40px;
        }
    </style>

    <h1>Name: {{ $product->name }}</h1>
    <p>Email: {{ $product->email }}</p>
    <p>Phone:
        <?php
              if ($product->phone == null)
              {
                  echo 'Dont have a number';
              }else
              {
                  echo $product->phone;
              }
              ?>
    </p>
    <p>Description: {{ $product->description }}</p>

    <img src="{{ asset('pictures/' . $product->image) }}" alt="Product Image">
    <br>
    <a href="{{route('home')}}" class="btn btn-default btn-sm">Back</a>|
            <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-primary btn-sm">Edit</a>

@endsection
