<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function index()
    {   
        try {
            $cats = Cat::all(); // Retrieve all cats from database

            return response()->json($cats, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve cats.'], 500);
        }
    }
    public function create()
    {
        return view('cats.create');
    }
    public function store(Request $request)
    {
        //Checks if the input is valid and displays a message in the create blade file
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'dob' => 'required|date|before_or_equal:today',
            'owner_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
        ]);
        
        $cat = Cat::create($request->all());

        return response()->json([
            'message' => 'Cat successfully created!',
            'cat' => $cat,
        ], 200);
    }
}
