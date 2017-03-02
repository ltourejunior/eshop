<div class="col-md-6" class="top-products">
    <h2>Top products</h2>
 
        @foreach($top_products as $product_id => $product_name)

            <a class="btn btn-default" href="{{ route('product', ['id' => $product_id]) }}" role="button">
                {{ $product_name }}
            </a>

        @endforeach

</div>