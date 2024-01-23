<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common; 
use Illuminate\Http\RedirectResponse;
use App\Models\Contacmail;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test =Testimonial ::get();
        
       

        return view('dashboard\Testimonials\testlist',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Testimonials.addtestimonials' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages= $this->messages();

        $data = $request->validate([
            'name'=>'required',
            'Position'=>'required',
           'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'Content'=> 'required',
          

        ],$messages);
        $fileName = $this->uploadFile($request->image, 'assets/dashboard/images');
        $data['image']= $fileName;
        $data['active'] = isset($request->active);

        Testimonial::create($data);
        return redirect('dashboard/test'); 
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
        $test = Testimonial::findOrFail($id);
     
        return view('dashboard.Testimonials.edittest',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages= $this->messages();

        $data = $request->validate([
            'name'=>'required',
            'Position'=>'required',
           'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'Content'=> 'required',
          

        ],$messages);
        
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/dashboard/images');
            $data['image']= $fileName;
        }
        $data['active'] = isset($request->active);

        
        Testimonial::where('id', $id)->update($data);
        return redirect('dashboard/test'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect ('dashboard/test');
    }


    public function trashed(){
        $test = Testimonial::onlyTrashed()->get();
        return view('dashboard.Testimonials.trashedtest',compact('test'));
    }

    public function forcedelete(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->forceDelete();
        return redirect ('dashboard/test');


    }

    public function restore(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->restore();
        return redirect ('dashboard/test');
    }


  





    
    public function messages(){
        return [
            'name.required'=>'Title is required',
            'Position.required'=> 'description is required',
           
            'image' => 'image is required',
            'Content'=> ' Content is required',
          

        ];
    }

    


    
}
