<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'id',
        'contact_id',
        'e_c_member_id',
        'reciept_template_id',
        'aic_notification_template_id',
        'project',
        'amount',
        'member_id',
        'deleted_at',
    ];
}
