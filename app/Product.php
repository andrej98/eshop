<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'brand', 'price', 'color','category_id'
    ];

    public function images() {
        return $this->hasMany('App\Image');
    }

    public function orders() {
        return $this->belongsToMany('App\Order');
    }
    public function categories() {
        return $this->belongsTo('App\Category');
    }
}
