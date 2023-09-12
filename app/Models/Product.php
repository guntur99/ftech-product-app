<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thumbnail;
use App\Models\Rate;
use App\Models\Shop;
use App\Models\Origin;
use App\Models\Species;
use App\Models\RoastLevel;
use App\Models\Tasted;
use App\Models\Processing;

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

    public function shop()
    {
        return $this->hasOne(Shop::class, 'id', 'shop_id');
    }

    public function origin()
    {
        return $this->hasOne(Origin::class, 'id', 'origin_id');
    }

    public function species()
    {
        return $this->hasOne(Species::class, 'id', 'species_id');
    }

    public function roastLevel()
    {
        return $this->hasOne(RoastLevel::class, 'id', 'roast_level_id');
    }

    public function tasted()
    {
        return $this->hasOne(Tasted::class, 'id', 'tasted_id');
    }

    public function processing()
    {
        return $this->hasOne(Processing::class, 'id', 'processing_id');
    }
}
