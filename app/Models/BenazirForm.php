<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenazirForm extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'contact_no',
        'whatsapp_no',
        'email',
        'trade_preference',
        'age',
        'city',
        'last_education',
        'preferred_timing',
        'comments',
    ];
}
