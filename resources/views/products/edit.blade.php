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
    <h1>Edit "{{ $product->name }}" product</h1>

    @include('products.form', [
        'action' => route('products.update', ['product' => $product->id]),
        'method' => 'PUT'
    ])
@endsection
