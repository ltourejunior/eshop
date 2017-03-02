<div class="col-md-6">
    <h2>Categories</h2>
    <p>In our eshop we have:</p>
    <ul>
        @foreach($categories as $categories_id => $category_name)

                <a class="btn btn-default" href="{{ route('category', ['id' => $categories_id]) }}" role="button">
                    {{ $category_name }}
                </a>

        @endforeach
    </ul>
</div>