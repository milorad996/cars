<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars', compact('cars'));
    }

    public function show($id)
    {
        // select * from posts where id = $id limit 1;
        $car = Car::find($id);
        return view('car', compact('car'));
    }
}
