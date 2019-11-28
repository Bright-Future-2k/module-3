@extends('welcome')

@section('content')
    <h3 class="h3">Product List</h3>
    <div class="row">
        @if (Session::has('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif

        @if (Session::has('delete_error'))
            <div class="col-12 alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('delete_error') }}</strong>
            </div>
        @endif

        @forelse($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="{{ asset('storage/' . $product->image) }}">
                        </a>
                    </div>
                    <div class="col-12">
                        <h3><a href="#">{{ $product->name }}</a></h3>

                        <div class="price">Sale from $2000
                            <span> to $1000</span>
                        </div>

                        <a class="add-to-cart" href="{{ route('cart.addToCart', $product->id) }}">+ Add To Cart</a>
                    </div>
                </div>
            </div>
        @empty
            <p>{{ "Không có sản phẩm nào" }}</p>
        @endforelse
    </div>

@endsection
