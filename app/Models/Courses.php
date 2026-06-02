<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    
    public $timestamps=false;
    
    protected $table = 'courses';
    
    protected $fillable = [
        'position',
        'image',
        'image_url',
        'video_url',
        'outline_pdf',
        'coursename',
        'zoho_id',
        'zoho_product_id',
        'slug',
        'description',
        'program_fee',
        'lump_sum_fee',
        'difficulty',
        'duration',
        'sessions',
        'rating',
        'is_active'
    ];
    
    public function trainer()
    {
        return $this->belongsTo(Trainers::class, 'trainer_id');
    }
}
