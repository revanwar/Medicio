<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catgory;

class Product extends Model
{
    use HasFactory;


    public function catgories() {
        return $this->belongsTo(Catgory::class,'catagory','id');
    }
}
