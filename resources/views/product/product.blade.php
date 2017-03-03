@extends('layout')



@section('content')

    <h1>{{ $product_details->name}}</h1>

    <p>{{ $product_details->description}}</p>
    <p>{{ $product_details->price}}</p>


    <form action="{{action('HomeController@checkout')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" id="{{ $product_details->id}}" value="{{ $product_details->name}}">
        <input type="submit" value="order" name="order" >
        <input type="text" value="{{ $product_details->price}} &euro;" name="price" >
    </form>


@endsection