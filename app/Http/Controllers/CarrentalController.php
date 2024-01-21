<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Traits\Common; 
use App\Models\Category;
use App\Models\Contacmail;

class CarrentalController extends Controller
{
    public function try()
    {
        return view('layouts.parent');
    }

    public function listing()
    {
        $car = Car::get();
        return view('carrental.listing',compact('car'));
    }

    public function single()
    {
        $car = Car::get();
        $categories = Category::select('id', 'categoryName')->get();
        return view('carrental.single',compact('car', 'categories'));
    }
    public function blog()
    {
     
        return view('carrental.blog');
    }

    public function about()
    {
     
        return view('carrental.about');
    }

    

}
