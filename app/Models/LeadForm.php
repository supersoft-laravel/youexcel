<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadForm extends Model
{
    use HasFactory;
    protected $table = 'lead';
    protected $fillable = [
        'whatsapp',
        'Name',
        'Phone',
        'Email',
        'city',
        'CoursesIntrested',
        'Comments',
        'DateTime',
    ];
    public $timestamps=false;
}
