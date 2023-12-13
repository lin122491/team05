<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'schools';
    protected $fillable =[
        'school',
        'academic_system',
        'mid',
        'public_and_private',
        'address',
        'phone'
    ];
    
    public function mes()
    {
        return $this->belongsTo('App\Models\mes', 'mid', 'id');
    }
}