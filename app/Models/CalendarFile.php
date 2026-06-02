<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarFile extends Model
{
    // Specify the table name
    protected $table = 'calendar_files'; // Use singular form as your table name

    // Specify the fillable fields
    protected $fillable = [
        'calendar_file',
    ];
}
