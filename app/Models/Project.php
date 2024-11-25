<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'deadline',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}