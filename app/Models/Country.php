<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function addresses()
    {
        return $this->hasManyThrough(Address::class,City::class);
    }

    public function payments()
    {
        return $this->hasManyDeep(Payment::class,[City::class,Address::class,Customer::class]);
    }
}
