<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'uid',
        'street_address',
        'country',
        'city',
    ];
}
