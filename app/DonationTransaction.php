<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationTransaction extends Model
{
    protected $fillable = [
        "id",
        "donation_reciever_id",
        "type",
        "amount",
    ];
}
