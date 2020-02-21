<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
    public function categories()
    {
        return $this->belongsTo(User::class);
    }
}



