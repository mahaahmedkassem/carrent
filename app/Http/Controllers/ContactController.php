<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacmail;
use Illuminate\Http\RedirectResponse;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = Contacmail::get();

        return view('dashboard.contact.maillist',compact('mails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("dashboard\contact\contactus"); 

       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $mails = Contacmail::findOrFail($id);
        
        return view('dashboard.contact.showemail',compact('mails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    function send(Request $request)
    {

        $data= $request ->validate([
          'fname'=>'required',
          'lname'=>'required',
          'email'=>'required',
          'message'=>'required'

        ]);
        Contacmail::create($data);
        Mail::to('try@gmail.com')->send(new Contact($data));

        return 'email sended';
        
  
         
      }

}
