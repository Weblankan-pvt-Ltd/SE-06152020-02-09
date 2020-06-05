<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'id', 'type','status',
    ];


    public function product()
    {
        return $this->hasOne('App\Type');
    }

}
