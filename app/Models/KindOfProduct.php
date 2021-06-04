<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfProduct extends Model
{
    protected $table = "kind_of_product";

    public function allProducts(){
        return $this->hasMany('\App\Models\Product','kind','kind');
    }
}
