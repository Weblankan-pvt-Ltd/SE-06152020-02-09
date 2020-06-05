<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id', 'name', 'type_id','price','condtion','status','created_by',
    ];

    public function type()
    {
        return $this->belongsTo('App\Product');
    }

}
