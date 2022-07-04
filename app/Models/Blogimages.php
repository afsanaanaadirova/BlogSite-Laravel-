<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogimages extends Model
{
    use HasFactory;
    protected $table = 'blog_images';
    protected $fillable = [];

    public function blog(){
        return $this->belongsTo(Blogs::class);
    }
}
