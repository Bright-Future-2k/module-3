@extends('home')

@section('title','danh sach tinh thanh')

@section('body')
    <div class="container">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sach khach hang</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ten tinh</th>
                    <th scope="col">So khach</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities)==0)
                    <tr>
                        <td colspan="4">khong co du lieu</td>
                    </tr>
                @else
                    @foreach($cities as $key =>$city)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $city->name }}</td>
                        <td>{{ count($city->customers) }}</td>

                        <td><a href="{{ route('cities.edit',["id" => $city->id]) }}">edit</a></td>
                        <td><a href="{{ route('cities.destroy',["id"=>$city->id]) }}" class="text-danger" onclick="return confirm('do you want to delete')"> delete</a></td>
                    </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="'btn btn-primary" href="{{ route('cities.create') }}">Them moi</a>
        </div>
    </div>
    </div>
@endsection
