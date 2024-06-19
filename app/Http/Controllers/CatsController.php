<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function getAllCats(Cat $cat)
    {   
        return view('cats.show');
    }

    // Handle POST request
    public function postCats()
    {
        return view('cats.show');
    }
}
