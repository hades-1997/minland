<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'emp_code',
        'fullname',
        'nickname',
        'department',
        'position',
        'join_date',
        'contract_date',
        'status',
        'resign_date',
        'tax_code',
        'tax_issued_date',
        'tax_issued_place',
        'social_id',
        'insurance_start',
        'ethnicity',
        'gender',
        'birth_year',
        'id_number',
        'id_issued_date',
        'id_issued_place',
        'province_origin',
        'education',
        'address_perm',
        'address_temp',
        'note',
        'bank',
        'phone',
        'birth_place',
        'household',
        'dependents',
    ];
}
