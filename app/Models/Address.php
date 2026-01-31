<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'province',
        'province_name',
        'city',
        'city_name',
        'postalcode',
        'address',
    ];
}
