<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrentalController extends Controller
{
    public function try()
    {
        return view('layouts.parent');
    }

    public function listing()
    {
        return view('carrental.listing');
    }

}
