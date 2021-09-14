<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'uid',
        'pid',
        'first_name',
        'last_name',
        'document',
        'email',
        'phone',
        'company_name',
    ];
}
