<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Today</title>
</head>
<body>
<div class="container">
    <div class="col-12">
        <div style="background-color: aliceblue" class="row">
            <div style="background-color: #636b6f" class="col-12">
                <h1 >Weather Forcus</h1>
            </div>
            <div class="col-12">
                <label><h3>Place: </h3>{{$json_text->name}}</label>
                <div class="col-12">
                    <label><h3>Temperture: </h3>{{ $json_text->main->temp - 273.15 }}&#186C </label>
                </div>
            </div>

        </div>
    </div>
</div>
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
<i class="fas fa-cannabis"></i>
</body>
</html>

