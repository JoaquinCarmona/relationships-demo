<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $table = 'customer';

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function country()
    {
        return $this->belongsToThrough(Country::class,[City::class,Address::class]);
    }
}
