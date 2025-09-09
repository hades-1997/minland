<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $table = 'computer';

    protected $fillable = [
        'department',
        'fullname',
        'emp_code',
        'username',
        'device_model',
        'cpu',
        'hard_disk',
        'ram',
        'monitor',
        'os',
        'office_version',
        'mail_client',
        'mac_address',
    ];
}
