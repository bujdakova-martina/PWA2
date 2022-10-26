<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'title',
        'department',
        'credit',
        'semester',
        'semester',
        'supervisor_id',
    ];

    public function supervisor() {
        return $this->hasOne(User::class, 'id', 'supervisor_id');
    }    
}
