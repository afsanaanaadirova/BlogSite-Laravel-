<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'logo',
        'description',
        'status'
    ];

    public function company_images(){
        return $this->hasMany(CompanyImages::class);
    }
}
