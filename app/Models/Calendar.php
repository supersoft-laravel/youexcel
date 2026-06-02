<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    // Specify the table name
    protected $table = 'calendar'; // Use singular form as your table name

    // Specify the fillable fields
    protected $fillable = [
        'title',
        'course_id',
        'course_name',
        'd_date',
        'd_timing',
        'class_date',
        'class_timing',
        'duration',
        'd_btn',
        'monthly_fee',
        'fees',
    ];
    
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
