<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * 
 *
 * @property int $id
 * @property string $dni
 * @property string $full_name
 * @property string|null $short_name
 * @property string $email
 * @property string $login
 * @property string $password
 * @property string|null $remember_token
 * @property string $user_type
 * @property string|null $office
 * @property string|null $office_phone
 * @property string|null $personal_phone
 * @property string|null $copier_uid
 * @property string|null $copier_password
 * @property int $teaches
 * @property int $is_current_member
 * @property int $is_council_member
 * @property int $is_total_member
 * @property string $last_access
 * @property string|null $group
 * @property string|null $category
 * @property string|null $website
 * @property int|null $teaching_order
 * @property string|null $scholarship_history
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\ProfessorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereCopierPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereCopierUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereDni($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereIsCouncilMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereIsCurrentMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereIsTotalMember($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereLastAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereOfficePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor wherePersonalPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereScholarshipHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereTeaches($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereTeachingOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Professor whereWebsite($value)
 * @mixin \Eloquent
 */
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
