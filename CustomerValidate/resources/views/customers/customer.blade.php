@extends('home')
@section('title','Form dang nhap')

@section('body')
    <div class="container">
        <div class="col-12">
            <h1>Customer Validate</h1>
        </div>


        <p style="color: green"></p>
        <div class="col-12">
            <form method="get" action="{{ route('customer.index') }}">
                <table class="table table-striped">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" placeholder="nhap ten...">
                                @if($errors->has('name'))
                                    <span>{{$errors->fisrt('name')}}</span>
                                    @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Age:</label>
                                <input type="number" name="age" placeholder="so tuoi...">
{{--                                @if($errors->any())--}}
{{--                                    @foreach($errors->all() as $nameError)--}}
{{--                                        <p style="color:red">{{ $nameError }}</p>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
                            </div>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-primary" type="submit"> Submit</button>
            </form>

            <div class="error-message">
{{--                @if($errors->any())--}}
{{--                    @foreach($errors->all() as $nameError)--}}
{{--                        <p style="color:red">{{ $nameError }}</p>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
            </div>
        </div>

    </div>
@endsection
