<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $cats = Category::get();
      

        return view('dashboard.categorys.catlist',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categorys.addcat' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages= $this->messages();
        $data = $request->validate([
            'categoryName'=>'required',
           

        ],$messages);

        Category::create($data);
        return redirect('dashboard/cat');
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
        $cats = Category::findOrFail($id);
        return view('dashboard.categorys.editcat',compact('cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = $request->validate([
            'categoryName'=>'required',
           

        ]);

        Category::where('id', $id)->update($data);
        return redirect('dashboard/cat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        // $cars = Car::findOrFail($id);

        if ($category->car()->exists()) {
            // Category has products, cannot delete
            return redirect()->back()->with('error', 'Cannot delete category with associated products.');
        
        }
    
        $category->delete();
    
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }


    public function trashed(){
        $cat = Category::onlyTrashed()->get();
        return view('dashboard.categorys.trashedcat',compact('cat'));
    }

    public function forcedelete(string $id): RedirectResponse
    {
        Category::where('id', $id)->forceDelete();
        return redirect ('dashboard/cat');


    }
    public function restore(string $id): RedirectResponse
    {
        Category::where('id', $id)->restore();
        return redirect ('dashboard/cat');
    }
    

  
     

    public function messages(){
        return [
            'categoryName.required'=>'The category name field is required.',
           
            

        ];
    }

   
}
