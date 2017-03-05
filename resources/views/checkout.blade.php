@extends('layout')

@section('content')
    <div class="container">
        <h1>Thank you for buying the {{ $ordered->name}}</h1>
        <p>There is many more interesting things to buy</p>

    </div>


    <a href="{{action('HomeController@homepage')}}">Back to homepage</a>
@endsection