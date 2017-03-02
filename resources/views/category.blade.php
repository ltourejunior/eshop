@extends('layout')

@section('content')
    <div id="elements" class="row">
        <div class="col-md-12 text-center">
            <div class="category-info">
                <h1></h1>
                <p class="description">
                    @foreach($sub_categories as $parent_id => $sub_category)
                        <a class="btn btn-default" href="{{ route('sub_categories', ['id' => $sub_category->id]) }}" role="button">
                            {{ $sub_category->name}}
                        </a>

                    @endforeach
                </p>
            </div>
        </div>
        <div class="col-md-6 second">
            <div id="element2">
                <div class="top-products">
                    <h3>Top product</h3>
                    Topisssiiiimmmmmmmmm
                </div>
            </div>
        </div>

    </div>


@endsection