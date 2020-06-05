<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'id', 'email', 'name','address','status','created_by',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

}
