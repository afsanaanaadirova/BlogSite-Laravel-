<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'blog_category_id',
        'name',
        'description',
        'image',
        'status',
    ];
    

    public function blog_category(){
        return $this->belongsTo(BlogCategories::class);
    }
    public function blog_images(){
        return $this->hasMany(Blogimages::class);
    }
}
