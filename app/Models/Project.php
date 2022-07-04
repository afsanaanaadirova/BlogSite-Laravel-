<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'projects';
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'date',
        'status'
    ];
    
    public function project_images(){
        return $this->hasMany(ProjectImages::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
