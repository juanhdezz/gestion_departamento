<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Professor extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni',
        'full_name',
        'short_name',
        'email',
        'login',
        'password',
        'office',
        'office_phone',
        'personal_phone',
        'copier_uid',
        'copier_password',
        'teaches',
        'is_current_member',
        'is_council_member',
        'is_total_member',
        'last_access',
        'group',
        'category',
        'website',
        'teaching_order',
        'scholarship_history',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
