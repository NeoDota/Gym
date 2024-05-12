<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'precio',
        'cantidad',
        'image',
    ];

    public function pays()
    {
        return $this->hasMany('App\Models\Pay', 'productos_id', 'id');
    }
}
