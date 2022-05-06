<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'train_company',
        'train_code',
        'departure_railway',
        'destination_railway',
        'departure_time',
        'arrival_time',
        'n_couches',
        'on_time',
        'deleted'
    ];
}
