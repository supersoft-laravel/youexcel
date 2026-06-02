<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadCorporate extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'training_program_name',
        'organization_name',
        'approx_nominations',
        'focal_contact_name',
        'focal_contact_number',
        'focal_contact_email',
        'remarks',
    ];
}
