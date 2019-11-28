<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Nhap thong tin</h1>
    @if ($errors->any())
        <div class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('store') }}">
        {{ @csrf_field() }}
        <label for="number">chi duoc nhap so</label>
        <input type="text" name="number">
        <button type="submit">kiem tra</button>
    </form>

</div>
</body>
</html>
