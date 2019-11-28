@extends('home')
@section('title','danh sach nhan vien')
@section('body')
    <div class="row">
        <div class="col-6">
            <h1>
                Danh sach nhan vien
            </h1>
        </div>

        <form class="col-6" action="{{route('staff.search')}}" method="post">
            @csrf
            <input class="" type="search" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('no_word'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('no_word') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Group</th>
            <th scope="col">Name</th>
            <th scope="col">Date_birthday</th>
            <th scope="col">Gender</th>
            <th scope="col">Number_phone</th>
            <th scope="col">So_CMND</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        @if(count($staffs) == 0)
            <tr>
                <td>No data</td>
            </tr>
        @else
            @foreach($staffs as $key=>$staff)
                <tbody>
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $staff->group->name }}</td>
                    <td>{{ $staff->name }}</td>
                    <td>{{ $staff->date_birthday }}</td>
                    <td>{{ $staff->gender }}</td>
                    <td>{{ $staff->number_phone }}</td>
                    <td>{{ $staff->so_CMND }}</td>
                    <td>{{ $staff->email }}</td>
                    <td>{{ $staff->address }}</td>
                    <td><a href="{{route('staff.edit',$staff->id)}}" class="btn btn-secondary">Edit</a></td>
                    <td><a href="{{route('staff.delete',$staff->id) }}" class="btn btn-danger"
                           onclick="return confirm('ban that su muon xoa')">Delete</a></td>
                </tr>
                </tbody>
            @endforeach
        @endif
    </table>
    <a href="{{ route('staff.create') }}" class="btn btn-primary">Create</a>
    {{$staffs->links()}}
@endsection
