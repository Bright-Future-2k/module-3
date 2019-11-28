@extends('layouts.master')

@section('content')

    <div class="title m-b-md">
        Welcome home
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Dang xuat</button>
    </a>
    <hr>
@endsection
