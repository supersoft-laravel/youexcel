<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerConnectCandidate extends Model
{
    use HasFactory;
    
    protected $fillable = ['ref_no', 'name', 'phone', 'email' ,'experience', 'expertise', 'gender', 'status'];
}
