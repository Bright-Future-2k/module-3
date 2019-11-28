@extends('layouts.master')

@section('content')
    <div class="title m-b-md">
        Dang nhap
    </div>
    <div class="form-login">
        <form class="text-left" method="post" action="{{ route('user.login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter username">
{{--                @if($errors->find)--}}
{{--                    --}}
{{--                    --}}
{{--                @endif    --}}
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       required>
            </div>
            <div>


                @if(Session::has('login-fail'))
                    <div class="login-fail">
                        <p class="text-danger">{{ Session::get('login-fail') }}</p>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>

    </div>
@endsection
