<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;
    protected $table = 'blog_categories';
    protected $fillable = [];
    

    public function blogs(){
        return $this->hasMany(Blogs::class);
    }
}
