@extends('home')
@section('title','Add Person')

@section('body')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1>Them nguoi moi</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <span>Name</span>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name..." required>
                            <span>Phone</span>
                            <input type="text" class="form-control" name="phone" placeholder="Enter your phone..." required>
                            <br>
                            <input type="file"  name="image" required>

                        </div>
                        <button class="btn btn-primary" type="submit">Them vao</button>
                        <button class="btn btn-secondary" type="submit" onclick="window.history.go(-1);return false">Huy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
