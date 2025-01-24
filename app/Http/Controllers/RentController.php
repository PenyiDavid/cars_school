<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        $rents = Rent::with('car')->get();
        return view('rents.index', compact('rents'));

        //return response()->json($rents);
    }
}
