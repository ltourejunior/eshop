@extends('layout')

@section('content')
    <div id="elements" class="row">
        <div class="col-md-12 text-center">
            <div class="category-info">
                <h1></h1>
                <p class="description">
                    @foreach($products as $id=> $product)

                        <a class="btn btn-default" href="{{ route('product', ['id' => $product->id]) }}" role="button">
                            {{ $product->name }}
                        </a>

                    @endforeach
                </p>
            </div>
        </div>


    </div>


@endsection