<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thumbnail;
use App\Models\Rate;

class Product extends Model
{
    use HasFactory;

    public function thumbnails()
    {
        return $this->hasMany(Thumbnail::class, 'product_id', 'id');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class, 'product_id', 'id');
    }
}
