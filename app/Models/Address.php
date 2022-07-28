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

}
