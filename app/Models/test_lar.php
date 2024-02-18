<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_lar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    
    /*
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($testing) {
            $testing->user_id = auth()->id();
        });
    }
    */
}
