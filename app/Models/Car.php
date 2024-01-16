<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cartitle',
        'description',
        'shortdescription',
        'image',
        'price',
        'Doors',
        'Laggage',
        'Passenge',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
