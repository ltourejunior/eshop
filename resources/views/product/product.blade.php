@extends('layout')



@section('content')
@foreach($product_details as $product_detail)
    <h1>{{ $product_detail->name}}</h1>

    <p>{{ $product_detail->description}}</p>
    <p>{{ $product_detail->price}}</p>


    <form action="{{action('HomeController@checkout')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" id="{{ $product_detail->id}}" value="{{ $product_detail->id}}" name="product_id">
        <input type="text" value="{{ $product_detail->price}} &euro;" name="price" >
        <input type="submit" value="order" name="order" >
    </form>

    @endforeach
@endsection