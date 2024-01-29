<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacmail extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'message',
        // 'readed'
      
    ];


    // public function msg()
    // {
    //     return $this->hasMany('App\Models\Contacmail');
    // }

   
}
