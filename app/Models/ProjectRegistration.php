<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRegistration extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'father_name',
        'cnic',
        'gender',
        'present_address',
        'domicile',
        'contact_no',
        'whatsapp_no',
        'email',
        'age',
        'present_district',
        'city',
        'trade_preference',
        'last_education',
        'status',
        'preferred_timing',
        'comments',
    ];

}
