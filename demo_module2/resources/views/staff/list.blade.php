@extends('home')
@section('title','tao them nhan vien')

@section('body')
    <div class="row">
        <div class="col-4">
            <h1>Tao nhan vien</h1>
        </div>
        <div class="col-8">
            <form method="post" action="{{ route('staff.search') }}">
                @csrf
                <input class="col-6" type="search" placeholder="Name Staff...." aria-label="Search"
                       name="keyword">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="col-12">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Room</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($staffs) == 0)
            <tr>
                <td colspan="5">No data</td>
            </tr>
        @else
            @foreach($staffs as $key =>$staff)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $staff->name }}</td>
                    <td>{{ $staff->age }}</td>
                    <td>{{ $staff->gender }}</td>
                    <td>{{ $staff->phone }}</td>
                    <td>{{ $staff->address }}</td>
                    <td>{{ $staff->room->name }}</td>
                    <td>
                        <a href="{{ route('staff.edit',$staff->id) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('staff.delete',$staff->id) }}" class="btn btn-danger"
                           onclick="return confirm('ban co chac muon xoa')">Delete</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <button class="btn btn-outline-primary"><a href="{{ route('staff.create') }}">Create</a></button>
    {{$staffs->links()}}
@endsection
