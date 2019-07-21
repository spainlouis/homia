<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function images()
    {
        return $this->hasMany('App\ProductImages', 'product_id');
    }
    
    public function getImageUrlAttribute($value)
    {
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        } else {
            return asset('images/' . $value);
        }
    }
}
