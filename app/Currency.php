<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'name',
        'symbol',
        'code',
        'exchange_rate',
        'status',
        'description',
    ];
}
