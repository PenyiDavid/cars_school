<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>{{$car->car_model}}</h2>
    <ul>
        <li>{{$car->caution_money}}</li>
        <li>{{$car->km_price}}</li>
        <li>{{$car->day_price}}</li>
        <li>{{$car->description}}</li>
    </ul>
</body>

</html>