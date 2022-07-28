<?php

namespace App\Models;

use App\Traits\BelongsToThrough;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\True_;

class Address extends Model
{
    use BelongsToThrough;

    protected $table = 'address';

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsToThrough(Country::class,City::class);
    }
}
