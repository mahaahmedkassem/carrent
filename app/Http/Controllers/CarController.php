<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Traits\Common; 
use App\Models\Category;
use App\Models\Contacmail;

class CarController extends Controller
{
 use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
       

        return view('dashboard.cars.index',compact('cars'));
    }

    public function dashboard(Request $request)
    {
        return view("layouts.adminview");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'categoryName')->get();
        return view('dashboard.cars.addcar' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $messages= $this->messages();

        $data = $request->validate([
            'cartitle'=>'required',
            'description'=>'required',
           'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'price'=> 'required',
            'Doors'=> 'required',
            'Laggage'=> 'required',
            'Passenge'=> 'required',
            'category_id'=> 'required',

        ], $messages);

        $fileName = $this->uploadFile($request->image, 'assets/dashboard/images');
        $data['image']= $fileName;
        $data['active'] = isset($request['active']);

           Car::create($data);
           return redirect('dashboard/cars'); 


        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        $categories = Category::select('id', 'categoryName')->get();
        return view('dashboard.cars.cardetail',compact('car', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $categories = Category::select('id', 'categoryName')->get();
        return view('dashboard.cars.edit',compact('car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages= $this->messages();

        $data = $request->validate([
            'cartitle'=>'required',
            'description'=>'required',
           'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'price'=> 'required',
            'Doors'=> 'required',
            'Laggage'=> 'required',
            'Passenge'=> 'required',
            'category_id'=> 'required',

        ],$messages);
       
        $data['active'] = isset($request['active']);

        // update image if new file selected
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/dashboard/images');
            $data['image']= $fileName;
        }

        //return dd($data);
        Car::where('id', $id)->update($data);
        return redirect('dashboard/cars'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return redirect ('dashboard/cars');
    }

    public function messages(){
        return [
            'cartitle.required'=>'Title is required',
            'description.required'=> 'description is required',
            'price.required'=> 'price is required',
            'image' => 'image is required',
            'price'=> 'price is required',
            'Doors'=> 'Doors numbers is required',
            'Laggage'=> 'Luggage required',
            'Passenge'=> 'Passengers is  required',
            

        ];
    }
}
