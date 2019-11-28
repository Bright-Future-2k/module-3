@extends('home')

@section('title','Bill list')

@section('body')
    <div class="container">
        <div class="rol-12">
            <div class="row">
                <div class="rol-12">
                    <h1>Bill list</h1>
                </div>
                <div class="rol-12 md">
                    <form method="get" action="{{ route('bills.search') }}">
                        <input type="text" placeholder="Find Name Bill..." name="keyword">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                <div class="rol-12">
                    <form method="post" action="{{ route('locale.change') }}">
                        @csrf
                        <select name="message" onchange="this.form.submit()">
                            <option>Choose language</option>
                            <option value="vi">VI</option>
                            <option value="en">EN</option>
                        </select>
                    </form>
                </div>
                @if(Session::has('success'))
                    <span class="text text-success">{{Session::get('success')}}</span>
                @endif
                @if(Session::has('delete-error'))
                    <span class="text text-success">{{Session::get('delete-error')}}</span>
                @endif
                <table class=" table table-striped">
                    <thead class="thread-dark">
                    <tr>
                        <th>STT</th>
                        <th>Ten khach hang</th>
                        <th>Ten hoa don</th>
                        <th>Ngay thanh toan</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($bills) == 0)
                        <tr>
                            <td colspan="4">Không có dạng sách</td>
                        </tr>
                    @else

                        @foreach($bills as $key => $bill)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $bill-> customer['name'] }}</td>
                                <td>{{ $bill->name }}</td>
                                <td>{{ $bill->date }}</td>
                                <td><a href="{{ route('bills.edit',['id'=>$bill->id]) }}"
                                       class="btn btn-primary">Edit</a>
                                </td>

                                <td><a href="{{ route('bills.destroy',['id'=>$bill->id]) }}" class="btn btn-danger"
                                       onclick="return confirm('ban co muon xoa')">Delete</a>
                                </td>

                                <td><a href="{{ route('cart.addToCart',['id'=>$bill->id]) }}"
                                       class="btn btn-outline-info">+ Add to cart</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <a href="{{ route('bills.create') }}" class="btn btn-info">Create</a>
            <div class="rol-12">
                {{ $bills->links() }}
                {{--                <a href="{{ route('home') }}"><h5> <-Back Home</h5></a>--}}
            </div>
        </div>
    </div>
@endsection
