@extends('home')

@section('title','')

@section('body')
    <div class="container">
        <div class="rol-12">
            <div class="row">
                <div class="rol-12">
                    <h1>Customer list</h1>
                </div>
                <div class="rol-12">
                    <form method="post" action="{{ route('locale.change') }}">
                        @csrf
                        <select name="message" onchange="this.form.submit()">
                            <option>Locale</option>
                            <option value="vi">VI</option>
                            <option value="en">EN</option>
                        </select>
                    </form>
                </div>
                <table class=" table table-striped">
                    <thead class="thread-dark">
                    <tr>
                        <th>STT</th>
                        <th>@lang('Ten khach hang')</th>
                        <th>@lang('So dien thoai')</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($customers) == 0)
                        <tr>
                            <td colspan="4">Không có dạng sách</td>
                        </tr>
                    @else
                        @foreach($customers as $key => $customer)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td><a href="{{ route('customers.edit',['id'=>$customer->id]) }}"
                                       class="btn btn-primary">Edit</a>
                                </td>
                                <td><a href="{{ route('customers.destroy',['id'=>$customer->id]) }}" class="btn btn-danger" onclick="return confirm('ban co muon xoa')" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <a href="{{ route('customers.create') }}" class="btn btn-info">Create</a>
            <div class="rol-12">
                {{--                <a href="{{ route('home') }}"><h5> <-Back Home</h5></a>--}}
            </div>
        </div>
    </div>
@endsection
