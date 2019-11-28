@extends('home')
@section('title','Sua bang khach hang')

@section('body')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
                <div class="col-12">
                    <form method="post" action="{{ route('customers.update', 1) }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên khách hàng</label>
                            <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}"
                                   required></div>
                        <div class="form-group">

                            <input type="file" name="image" value="{{ $customer->image }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
