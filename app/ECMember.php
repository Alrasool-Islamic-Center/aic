<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ECMember extends Model
{
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'is_active',
        'deleted_at',
    ];
}
