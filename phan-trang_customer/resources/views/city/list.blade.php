@extends('home')

@section('title','Danh sach thanh pho')

@section('body')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1>Danh sach thanh pho</h1>
                </div>
                <div>
                    @if(Session::has('success'))
                        <p class="text success">
                            <i class="fa fa-check" aria-hidden="true"></i>{{Session::has('success')}}
                        </p>
                    @endif
                </div>
                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Picture</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($cities)==0)
                            <tr><td colspan="2">khong co du lieu</td></tr>
                        @else
                            @foreach($cities as $key =>$city)
                            <tr>
                                <td scope="row">{{ ++$key }}</td>
                                <td>{{ $city->name }}</td>
                                <td><img style="max-height: 100px" src="{{ asset('storage/'.$city->picture) }}"></td>
                                <td><a href="{{ route('city.edit',['id'=>$city->id]) }}">Edit</a></td>
                                <td><a href="{{ route('city.destroy',['id'=>$city->id]) }}">Delete</a></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <button type="submit"><a href="{{ route('city.create') }}">Tao them</a></button>
                </div>
            </div>
        </div>
    </div>

@endsection
