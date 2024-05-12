<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'duracion',
        'Finicio',
        'precio',
    ];

    public function pays()
    {
        return $this->hasMany('App\Models\Pay', 'members_id', 'id');
    }
}
