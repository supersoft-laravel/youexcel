<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerConnectJob extends Model
{
    use HasFactory;
    
    protected $fillable = ['ref_no', 'job_title', 'company_name', 'minimum_experience', 'expertise', 'deadline', 'status'];
}
