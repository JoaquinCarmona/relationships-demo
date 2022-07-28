<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $table = 'payment';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function country()
    {
        return $this->belongsToThrough(Country::class,[City::class,Address::class,Customer::class]);
    }
}
