@extends('home')
@section('title','Tao them bai blog')

@section('body')
    <div class="container">
        <div class="container">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <h1>Thêm new_blog</h1>
                    </div>
                    <div class="col-12">
                        <form method="post" action="{{ route('blog.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Tên blog</label>

                                <link>
                                <input type="text" class="form-control" name="name" placeholder="Name blog..." required>

                            </div>
                            <div class="form-group">
                                <label>Actor</label>
                                <input type="text" class="form-control" name="actor" placeholder="Author of that..."
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Post</label>
                                <input type="text" class="form-control" name="post"
                                       placeholder="Write what you thing..." required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
