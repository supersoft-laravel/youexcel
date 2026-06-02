<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funnelform extends Model
{
    use HasFactory;
    protected $table = 'funnel';
    public $timestamps=false;
}
