@extends('home')

@section('title','Them moi khach hang')

@section('body')
    <div class="container">
        <div class="rol-12">
            <div class="row">
                <div class="rol-12">
                    <form method="post" action="{{ route('customers.store') }}">
                        @csrf
                        <h1>Them moi khach hang</h1>
                        <div class="form-group">
                            <span>Name:</span>
                            <input type="text" placeholder="dien ten..." name="name">
                            <span>Phone:</span>
                            <input type="tel" placeholder="dien so dien thoai..." name="phone">
                        </div>
                        <button class="btn btn-primary" type="submit">Create</button>
                        <button type="button" class="btn btn-danger" onclick="window.history.go(-1);return false;">Huy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection()
