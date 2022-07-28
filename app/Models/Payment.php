<?php

namespace App\Models;

use App\Traits\BelongsToThrough;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use BelongsToThrough;

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
