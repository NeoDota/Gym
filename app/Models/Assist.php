<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    use HasFactory;

    protected $fillable = ['pays_id', 'categories_id'];

    public function pay()
    {
        return $this->belongsTo('App\Models\Pay', 'pays_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id');
    }

}
