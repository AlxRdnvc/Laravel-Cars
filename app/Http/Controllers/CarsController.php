<?php

namespace App\Http\Controllers;

use App\Cars;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Cars::findOrFail($id);
        return view('cars.show', compact("car"));
    }
}


