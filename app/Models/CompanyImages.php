<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyImages extends Model
{
    use HasFactory;
    protected $table = 'company_images';
    protected $fillable = [
        'company_id',
        'image',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
