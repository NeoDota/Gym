<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    use HasFactory;

    protected $fillable = ['hora', 'fecha', 'users_id', 'categories_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id');
    }

}
