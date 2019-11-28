@extends('home')

@section('title','Change imformation')

@section('body')
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12"><h1>Change imformation</h1></div>
                <div class="col-12">
                    <form method="post" action="{{ route('blog.update', $blog->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $blog->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Actor</label>
                            <input type="text" class="form-control" name="actor" value="{{ $blog->actor }}" required></div>
                        <div class="form-group">
                            <label>Post</label>
                            <input type="text" class="form-control" name="post" value="{{ $blog->post }}" required>
                        </div>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
