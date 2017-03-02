@extends('layout')



@section('content')

    <h1>{{ $product_details->name}}</h1>

    <p>{{ $product_details->description}}</p>
    <p>{{ $product_details->price}}</p>

@endsection