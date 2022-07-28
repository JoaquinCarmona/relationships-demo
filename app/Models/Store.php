<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;

    protected $table = 'store';

    public function country()
    {
        return $this->belongsToThrough(Country::class,[City::class,Address::class]);
    }
}
