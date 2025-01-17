<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Cars</h1>
    <ol>
        @foreach ($cars as $car)
            <li>{{$car->car_model}}</li>
            <ul>
                <li>{{$car->caution_money}}</li>
                <li>{{$car->km_price}}</li>
                <li>{{$car->day_price}}</li>
                <li>{{$car->description}}</li>
                @if (auth()->check() && auth()->user()->role == 'user')
                    <form action="{{ route('cars.show', $car->id) }}" method="GET">
                        <input type="submit" value="Rent">
                    </form>
                @endif
            </ul>
        @endforeach
    </ol>
</body>

</html>