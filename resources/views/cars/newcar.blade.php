<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>New car</h1>

    <form action="{{route('cars.store')}}" method="post">
        @csrf
        <label for="car_model">Model:</label>
        <input type="text" name="car_model" id="car_model">
        <br>
        <label for="caution_money">caution_money</label>
        <input type="number" name="caution_money" id="caution_money">
        <br>
        <label for="day_price">Price per day</label>
        <input type="number" name="day_price" id="day_price">
        <br>
        <label for="km_price">KM price</label>
        <input type="number" name="km_price" id="km_price">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <br>
        <button type="submit">Add car</button>
    </form>
</body>

</html>