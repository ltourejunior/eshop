@extends('layout')

@section('content')

    <div class="jumbotron">
        <div class="container info">
            <h1>Welcome to EShopper</h1>
            <h3>About us</h3>
            <p>If you've never seen an eshop before you will be surprised.</p>
            <p>Shop with us or we will bankrupt. You're our only hope.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Start shopping &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @include('home/top_products')
            @include('home/categories')
        </div>
    </div>
@endsection