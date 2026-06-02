<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image_path', 'status', 'course_id'];
    
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
