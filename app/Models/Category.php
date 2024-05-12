<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'capacidad',
        'duracion',
    ];

    public function assists()
    {
        return $this->hasMany('App\Models\Category', 'categories_id', 'id');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'categories_id', 'id');
    }
}
