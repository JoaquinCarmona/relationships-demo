<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

}
