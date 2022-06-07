<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'is_done'
    ];

    public function categories() 
    {
        return $this->belongsToMany(Category::class);
    }
}