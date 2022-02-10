<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address','phone', 'total', 'user_id', 'payment_id', 'delivery_id', 'state'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('amount');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }
}
