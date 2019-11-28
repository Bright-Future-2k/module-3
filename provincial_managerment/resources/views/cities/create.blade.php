@extends('home')
@section('title','tao them 1 khach hang')

@section('body')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Them moi tinh thanh</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <span>ten tinh</span>
                            <input type="text" class="form-control" name="name" placeholder="enter name..." required>
                        </div>
                        <button type="submit" class="btn btn-primary">them moi</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Huy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
