<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{


    protected $table = 'address';

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsToThrough(Country::class,City::class);
    }
}
