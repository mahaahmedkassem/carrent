<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

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
        $data = $request->validate([
            'categoryName'=>'required',
           

        ]);

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
        Category ::where('id', $id)->delete();
        return redirect('dashboard/cat');
    }

   
}
