<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars=Car::get(); //load data in cars variable
        return view('cars', compact('cars')); //send data into cars blade file
        //compact(variable name)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store data into car table
        $cars=new Car();
        $cars->title=$request->title;
        $cars->description=$request->description;
        if (isset($request->published)){
            $cars->published=1;
        }else{
            $cars->published=0;
        }
        $cars->save();
        return 'Data added successfully';
        // return dd($request->request);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}