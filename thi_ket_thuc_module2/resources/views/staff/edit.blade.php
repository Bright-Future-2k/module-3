@extends('home')
@section('title','cap nhat nhan vien')
@section('body')
    <div class="col-12">
        <h1>
            Cap nhat nhan vien
        </h1>
    </div>
    <form action="{{route('staff.update',$staff->id)}}" method="post">
        @csrf
        <label>Group</label>
        <select name="group_id">
            @foreach($groups as $key=>$group)

                    @if($staff->group_id == $group->id)
                    <option selected value="{{ $group->id }}">{{$group->name}}</option>
                    @else
                        <option value="{{$group->id}}">{{ $group->name }}</option>
                @endif
            @endforeach
        </select>

        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $staff->name }}">
            @if($errors->has('name'))
                <span class="text text-danger">{{ $errors->first('name')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Date_birthday</label>
            <input type="date" class="form-control" name="date_birthday" value="{{ $staff->date_birthday }}">
            @if($errors->has('date_birthday'))
                <span class="text text-danger">{{ $errors->first('date_birthday')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Gender:</label><br>
            <input type="radio" value="male"
                   @if($staff->gender =='male')
                   checked
                   @endif
                   name="gender">Male
            <input type="radio" value="female"
                   @if($staff->gender =='female')
                   checked
                   @endif
                   name="gender">Female
            @if($errors->has('gender'))
                <span class="text text-danger">{{ $errors->first('gender')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Number Phone</label>
            <input type="number" class="form-control" name="number_phone" value="{{$staff->number_phone}}">
            @if($errors->has('number_phone'))
                <span class="text text-danger">{{ $errors->first('number_phone')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>So CMND</label>
            <input type="number" class="form-control" name="so_CMND" value="{{ $staff->so_CMND }}">
            @if($errors->has('so_CMND'))
                <span class="text text-danger">{{ $errors->first('so_CMND')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Email </label>
            <input type="email" class="form-control" name="email" value="{{ $staff->email }}">
            @if($errors->has('email'))
                <span class="text text-danger">{{ $errors->first('email')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="{{$staff->address}}">
            @if($errors->has('address'))
                <span class="text text-danger">{{ $errors->first('address')}}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-secondary">Edit</button>
        <a href="{{ route('staff.index') }}" class="btn btn-danger">Huy</a>
    </form>
@endsection
