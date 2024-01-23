<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Traits\Common; 
use App\Models\Category;
use App\Models\Contacmail;
use App\Models\Testimonial;

class CarrentalController extends Controller
{
    public function try()
    {
        return view('layouts.parent');
    }

    public function listing()
    {
        $car = Car::latest()-> paginate(6); 
        $test =Testimonial ::latest()->take(3)->get(); 
        return view('carrental.listing',compact('car','test'));
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

    public function Testimonials()
    {
        $test =Testimonial ::get();
        return view('carrental.Testimonials',compact('test'));
    }

    public function contact()
    {
        
        return view('carrental.contactmail');
    }

    public function index()
    {
        $car =Car ::latest()->take(6)->get(); 
        $test =Testimonial ::latest()->take(3)->get(); 
        return view('carrental.index' ,compact('car', 'test'));
    }

    



}
