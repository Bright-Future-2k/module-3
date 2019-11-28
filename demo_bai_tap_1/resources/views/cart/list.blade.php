@extends('home')

@section('title','Danh sach san pham')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Danh sach san pham</h1>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Ten khach hang</th>
                <th>Ten hoa don</th>
                <th>Ngay thanh toan</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(Session::has('cart'))
                @foreach($cart->item as $cart)
                    <tr>
                        <td>{{ ++$cart['item']->id}}</td>
                        <td>{{$cart['item']->name->customer['name']}}</td>
                        <td>{{$cart['item']->name}}</td>
                        <td>{{$cart['item']->date}}</td>
                    </tr>
                @endforeach
             @endif
            </tbody>
        </table>
        <button class="btn btn-outline-info" ><a href="{{ route('bills.index') }}"> <-Mua tiep</a></button>
    </div>
@endsection
