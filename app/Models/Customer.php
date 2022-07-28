<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

}
