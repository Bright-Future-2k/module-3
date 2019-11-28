@extends('home')
@section('title','tao them nhan vien')
@section('body')
    <div class="col-12">
        <h1>
            Them nhan vien
        </h1>
    </div>
    <form action="{{route('staff.store')}}" method="post">
        @csrf
        <label>Group</label>
        <select name="group_id">
            @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control
            @if($errors->has('name'))
                is-invalid
            @endif
                " name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <span class="text text-danger">{{ $errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Date_birthday</label>
            <input type="date" class="form-control
            @if($errors->has('date_birthday'))
                is-invalid
            @endif" name="date_birthday" value="{{ old('date_birthday') }}">
            @if($errors->has('date_birthday'))
                <span class="text text-danger">{{ $errors->first('date_birthday')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Gender:</label><br>
            <input type="radio" value="male" name="gender">Male
            <input type="radio" value="female" name="gender">Female
            @if($errors->has('gender'))
                <span class="text text-danger">{{ $errors->first('gender')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Number Phone</label>
            <input type="number" class="form-control
             @if($errors->has('number_phone'))
                is-invalid
            @endif" name="number_phone" value="{{ old('number_phone') }}">
            @if($errors->has('number_phone'))
                <span class="text text-danger">{{ $errors->first('number_phone')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>So CMND</label>
            <input type="number" class="form-control @if($errors->has('so_CMND'))
                is-invalid
            @endif" name="so_CMND" value="{{ old('so_CMND') }}">
            @if($errors->has('so_CMND'))
                <span class="text text-danger">{{ $errors->first('so_CMND')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Email </label>
            <input type="email" class="form-control @if($errors->has('email'))
                is-invalid
            @endif" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <span class="text text-danger">{{ $errors->first('email')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control @if($errors->has('address'))
                is-invalid
            @endif" name="address" value="{{ old('address') }}">
            @if($errors->has('address'))
                <span class="text text-danger">{{ $errors->first('address')}}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-secondary">Create</button>
        <a href="{{ route('staff.index') }}" class="btn btn-danger">Huy</a>
    </form>
@endsection
