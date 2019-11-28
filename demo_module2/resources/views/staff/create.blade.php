@extends('home')
@section('title','')

@section('body')
    <div class="col-12">
        <h1>Them moi nhan vien</h1>
    </div>

    <form method="post"
          @if(!$errors->has('name'))
          action="{{ route('staff.store') }}
          @endif
              ">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text"
                   class="form-control
                        @if($errors->has('name'))
                       border-danger is-invalid
                       @elseif(!$errors->has('name'))
                       border-success is-valid
                        @endif "
                   name="name" value="{{ old('name') }}">
            @error('name')
            <span class="text text-danger">{{$message}}</span>
            @enderror
            {{--            @if($errors->has('name'))--}}
            {{--                <p class="text text-danger">{{$errors->first('name')}}</p>--}}
            {{--            @endif--}}
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control
                @if($errors->has('name'))
                border-danger is-invalid
                @endif " name="age">

            @if($errors->has('age'))
                <p class="text text-danger @if($errors->has('name'))
                    border-danger is-invalid @endif">{{$errors->first('age')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Gender: </label>
            <input type="radio" value="male" name="gender"> Male
            <input type="radio" value="female" name="gender"> Female
            @if($errors->has('gender'))
                <p class="text text-danger">{{$errors->first('gender')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control
                @if($errors->has('name'))
                border-danger is-invalid
                @endif" name="phone">
            @if($errors->has('phone'))
                <p class="text text-danger">{{$errors->first('phone')}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control
                    @if($errors->has('name'))
                    border-danger is-invalid
                    @endif" name="address">
            @if($errors->has('address'))
                <p class="text text-danger">{{$errors->first('address')}}</p>
            @endif
        </div>

        <select name="room_id">
            @foreach($rooms as $room)
                <option value="{{$room->id}}">{{$room->name}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('staff.index')}}" class="btn btn-danger" >Huy</a>
    </form>
@endsection
