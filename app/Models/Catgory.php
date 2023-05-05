<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Catgory extends Model
{
    use HasFactory;

    protected $fillable = [
        'catgories_name',        
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

}
