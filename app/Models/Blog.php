<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function blogComments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
