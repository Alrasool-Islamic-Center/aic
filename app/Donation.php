<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'id',
        'contact_id',
        'donation_receiver_id',
        'reciept_template_id',
        'aic_notification_template_id',
        'donation_project_id',
        'amount',
        'member_id',
        'ec_notified',
    ];
}
