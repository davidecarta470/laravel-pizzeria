<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'name',
        'ingredients',
        'price',
        'description'
    ];

    public function sizes() {
        return $this->belongsToMany('App\Size');
    }
}
