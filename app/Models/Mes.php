<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    use HasFactory;
    protected $table = 'mes';
    protected $fillable =[
        'region',
        'url',
    ];
    
    public function schools()
    {
        return $this->hasMany('App\Models\school', 'mid');
    }

    public function delete()
    {
        $this->schools()->delete();
        return parent::delete();
    }        
}