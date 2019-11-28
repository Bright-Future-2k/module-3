@extends('layout')
@section('content')
    <div class="title m-b-md">
        Danh sách sản phẩm
    </div>

    <div class="row">

        @if(!isset($product) || count($product) === 0)
            <p class="text-danger">Không có sản phẩm nào.</p>
        @else

        <!-- Nếu biến $products tồn tại thì hiển thị sản phẩm -->
            @foreach($product as $key => $value)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->name }}</h5>
                            <p class="card-text">{{ $value->description }}</p>
                            <p class="card-text text-dark">${{ $value->price }}</p>
                            <p class="card-text text-danger">Số lượt xem: {{ $value->view_count }}</p>

                            <!-- Nút XEM chuyển hướng người dùng sang trang chi tiết -->
                            <a href="{{ route('product.show', $value->id) }}" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
