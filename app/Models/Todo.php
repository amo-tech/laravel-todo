<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('created_at');
    }
}
