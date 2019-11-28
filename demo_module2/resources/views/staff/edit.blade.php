@extends('home')
@section('title','')

@section('body')
    <div class="col-12">
        <h1>Sua nhan vien</h1>
    </div>

    <form method="post" action="{{ route('staff.update',$staff->id) }}">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control @if($errors->has('name'))
                border-danger is-invalid
@endif" name="address" name="name" value="{{$staff->name}}">
            @if($errors->has('name'))
                <p class="text text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control @if($errors->has('name'))
                border-danger is-invalid
@endif" name="address" name="age" value="{{$staff->age}}">
            @if($errors->has('age'))
                <p class="text text-danger">{{$errors->first('age')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Gender: </label>
            <input type="radio" value="male" name="gender" > Male
            <input type="radio" value="female" name="gender" > Female
            @if($errors->has('gender'))
                <p class="text text-danger">{{$errors->first('gender')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control @if($errors->has('name'))
                border-danger is-invalid
@endif" name="address" name="phone" value="{{$staff->phone}}">
            @if($errors->has('phone'))
                <p class="text text-danger">{{$errors->first('phone')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control @if($errors->has('name'))
                border-danger is-invalid
@endif" name="address" name="address" value="{{$staff->address}}">
            @if($errors->has('address'))
                <p class="text text-danger">{{$errors->first('address')}}</p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{route('staff.index')}}" class="btn btn-danger" >Huy</a>
    </form>
@endsection
