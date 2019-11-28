@extends('home')
@section('title','Trang Chu')

@section('body')
    <br>
    <div class="container">

        <div class="col-6">

            <form class="navbar-form navbar-left" action="{{route('customers.search')}}" method="get">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="keyword">
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-secondary">Tìm kiếm</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1>Danh sach khach hang</h1>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Phone</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($customers)==0)
                        <tr>
                            <td colspan="4">Khong co khach hang nao</td>
                        </tr>
                    @else
                        @foreach($customers as $key => $customer)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $customer->name }}</td>
                                <td><img style="max-height: 100px" src="{{ asset('storage/'.$customer->picture) }}">
                                </td>
                                <td>{{ $customer->phone }}</td>

                                <td><a href="{{ route('customers.edit',['id'=>$customer->id]) }}">edit</a></td>
                                <td><a href="{{ route('customers.destroy',['id'=>$customer->id])}}" class="text-danger"
                                       onclick="return confirm('Ban co chac muon xoa')">delete</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <a href="{{ route('customers.create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
    </div>
    {{ $customers->links() }}
{{--    {!! $customers->render() !!}--}}



@endsection
