<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory ,SoftDeletes ;

    protected $fillable = [
        'cartitle',
        'description',
        
        'image',
        'price',
        'Doors',
        'Laggage',
        'Passenge',
        'active',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
