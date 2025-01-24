<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ol>
        @foreach ($rents as $rent)
            <li>
                {{$rent->email}}
                <ul>
                    <li>{{$rent->car->car_model}}</li>
                    <li>{{$rent->rent_start}}</li>
                    <li>{{$rent->rent_end}}</li>
                    <li>{{$rent->km}} Km</li>
                    <li>{{$rent->all_price}} Ft</li>
                </ul>
            </li>

        @endforeach
    </ol>
</body>

</html>