@extends('base')


@section('content')

    <div style="padding-bottom: 30px;">
        <div class="row-cols-2">
            <a href="{{route('products.index')}}" type="text" class="home">
                Home
            </a>
        </div>

        <style>
            .home
            {
                text-decoration: none;
                color: black;
                font-size: 22px;
                margin-bottom: 40px;
            }
        </style>
        <h1>All products</h1>
        <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary">
            Add product
        </a>
    </div>

    <table class="table" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>
                    <img width="200"
                         @if ($product->picture)
                             src="{{asset('/storage/' . $product->picture)}}" alt="{{$product->picture}}"
                         @else
                             src="" alt=""
                         @endif
                    >
                </td>
                <td>
                    <a href="{{route('products.show', ['product' => $product])}}">
                        {{$product->name}}
                    </a>
                </td>

                <td>{{is_null($product->email) ? "No email" : $product->email}}</td>
                <td>{{number_format($product->phone)}}</td>
                <td>
                        {{$product->description}}
                </td>
                <td>
                    <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-outline-primary">
                        Edit
                    </a>
                    <form method="post" action="{{route('products.destroy', ['product' => $product])}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
