<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id',
        'type',
        'value',
        'member_id',
    ];
}