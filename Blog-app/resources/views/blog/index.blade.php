@extends('home')
@section('title','Trang chu')

@section('body')
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <h1>Blog Menu</h1>
                    </div>

                    <form method="post" action="{{ route('lang.vi') }}">
                        @csrf
                        <select name='message' onchange="this.form.submit()">
                            <option>Choose</option>
                            <option value="vi" >VI</option>
                            <option value="en" >EN</option>
                        </select>
                    </form>

                </div>
                <div class="col-12">
                    @if (Session::has('success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                        </p>
                    @endif
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">@lang('message.Name')</th>
                        <th scope="col">@lang('message.Actor')</th>
                        <th scope="col">@lang('message.Post')</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($blogs) == 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($blogs as $key => $blog)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->actor }}</td>
                                <td>{{ $blog->post }}</td>
                                <td><a href="{{ route('blog.edit', $blog->id) }}">sửa</a></td>
                                <td><a href="{{ route('blog.destroy', $blog->id) }}" class="text-danger"
                                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
{{--                <a class="btn btn-second" href="{{route('lang.vi',['vi'])}}">vi</a>--}}
                <a class="btn btn-primary" href="{{ route('blog.create') }}">Thêm mới</a>
            </div>
        </div>
    </div>
@endsection
