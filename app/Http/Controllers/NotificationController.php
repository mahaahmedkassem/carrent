<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Notification;
use App\Notifications\OffersNotification;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacmail;

class NotificationController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
       
    }
    public function sendOfferNotification() {
        $userSchema = User::first();
  
        $data = [
            'fname' => 'fname',
           
        ];
  
        Notification::send($userSchema, new OffersNotification($data));
   
        dd('Task completed!');
    }
}
