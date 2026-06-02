<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
        'slug',
        'parent_category_id',
        'year',
        'cat_type',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_cat_id');
    }
    
    public function parentCategory()
    {
        return $this->belongsTo(GalleryCategory::class, 'parent_category_id');
    }
    
    public function subCategories()
    {
        return $this->hasMany(GalleryCategory::class, 'parent_category_id');
    }
}
