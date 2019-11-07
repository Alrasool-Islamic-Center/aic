<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationTransaction extends Model
{
    protected $fillable = [
        "id",
        "donation_receiver_id",
        "type",
        "amount",
        "donation_id",
    ];
}
