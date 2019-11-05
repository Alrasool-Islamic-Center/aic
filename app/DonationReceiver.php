<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationReceiver extends Model
{
    protected $fillable = [
        "id",
        "first_name",
        "last_name",
        "phone_number",
        "email",
        "is_ec_member",
        "is_active",
        "deleted_at",
    ];
}
