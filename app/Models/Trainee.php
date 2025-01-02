<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trainee  extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'email',
        'login',
        'password',
        'office',
        'current_category',
        'total_days',
        'current_responsible', // Ahora es un campo de texto
        'scholarship_end',
        'teaching_credits_department',
        'desired_teaching_credits',
    ];

    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
