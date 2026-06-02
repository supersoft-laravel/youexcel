<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cfmarecorded extends Model
{
    use HasFactory;
    protected $table = 'cfma_recorded';
    public $timestamps=false;
}
