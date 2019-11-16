<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoneyTransfer extends Model
{
    protected $fillable = [
        "unique_id",
        "id",
        "transferor_phone",
        "transferee_phone",
        "amount",
        "state",
    ];
}
