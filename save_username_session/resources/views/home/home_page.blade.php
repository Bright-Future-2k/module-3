@extends('layouts.master')

@section('content')
    <div class="title m-b-md">
        Laravel Session
    </div>

    <div class="links">
        <a href="{{ route('show.login') }}">
            <button type="button" class="btn btn-outline-primary">Dang nhap</button>
        </a>
    </div>

@endsection
