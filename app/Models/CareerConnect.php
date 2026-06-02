<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerConnect extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'form_type', 'first_name', 'last_name', 'email', 'phone', 'gender', 'linkedin_profile',
        'github_profile', 'portfolio_link', 'resume_path', 'experience',
        'preferred_opportunities', 'association_with_youexcel', 'expertise_areas',
        'area_of_guidance', 'experience_level', 'preferred_mode', 'preferred_datetime',
        'additional_message', 'company_name', 'contact_person_name', 'website_link',
        'job_title', 'department', 'job_type', 'skills_required', 'stipend_range',
        'location', 'job_description', 'application_deadline', 'job_details_upload',
        'confirmation_agreement'
    ];

    protected $casts = [
        'preferred_opportunities' => 'array',
        'expertise_areas' => 'array',
        'preferred_datetime' => 'datetime',
        'application_deadline' => 'date',
    ];
    
    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'career_connect_id');
    }
}
