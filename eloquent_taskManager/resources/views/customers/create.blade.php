@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" >

                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" >
                    </div>

                        <input type="file"  name="image"  ><br><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
