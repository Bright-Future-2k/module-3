@extends('home')

@section('title','Sua bill')

@section('body')
    <div class="container">
        <div class="rol-12">
            <div class="row">
                <div class="rol-12">
                    <form method="post" action="{{ route('bills.update',['id'=>$bill->id]) }}">
                        @csrf
                        <h1>Sua bill </h1>
                        <div class="form-group">
                            <span>Customer_id</span>
                            <select name="customer_id">
                                @foreach($customers as $customer )
                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                            <span>Name</span>
                            <input type="text" name="name" value="{{ $bill->name }}">
                            @if($errors->has('name'))
                                <span class="text text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <span>Date</span>
                            <input type="date" name="date" value="{{ $bill->date }}">
                            @if($errors->has('date'))
                                <span class="text text-danger">{{ $errors->first('date') }}</span>
                            @endif
                        </div>
                        <button class="btn btn-primary" type="submit">Edit</button>
                        <button class="btn btn-secondary" onchange="window.history.go(-1); return false;" >Huy</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
