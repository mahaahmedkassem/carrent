<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Models\Contacmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();

        return view('dashboard.user.userlist',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.adduser' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username'=>'required'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' =>  $validatedData['password'],
            'username' => $validatedData['username'],
            
        ]);
        $user->markEmailAsVerified();
        $user->save();

       

        return redirect('dashboard/user'); 

        

        // $messages= $this->messages();
        // $data = $request->validate([
        //     'name'=>'required',
        // 'email'=>'required',
        // 'password'=>'required',
       
        // 'username'=>'required',
        // ],$messages);
        // $data['active'] = isset($request['active']);
       
        // User::create($data);
        // return redirect('dashboard/user'); 
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
        $user = User::findOrFail($id);
     
        return view('dashboard.user.edituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages= $this->messages();

        $data = $request->validate([
            'name'=>'required',
        'email'=>'required',
        'password'=>'required',
       
        'username'=>'required',
       

        ],$messages);
        $data['active'] = isset($request['active']);

        User::where('id', $id)->update($data);
        return redirect('dashboard/user'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect ('dashboard/user');
    }


    public function messages(){
        return [
            'name.required'=>'name is required',
            'email.required'=> 'email is required',
            'password.required'=> 'password is required',
            
            'username.required'=> 'username is required',

           
        
        ];
    }
}
