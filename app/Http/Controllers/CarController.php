<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function create()
    {
        return view('cars.newcar');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_model' => 'required|string|max:255',
            'caution_money' => 'required|integer',
            'km_price' => 'required|integer',
            'day_price' => 'required|integer',
            'description' => 'required|string',
        ]);

        Car::create($validatedData);

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }

    
}
