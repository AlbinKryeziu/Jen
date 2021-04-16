<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function role()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    public function hasRole($role)
    {        
        return $result = $this->role[0]->slug == $role;
    }
    
    public static function getUsersByRole($role)
    {
        return User::all()->filter->hasRole($role)->values();
    }
    
    public function isDoctor() {

        return $this->role()
            ->where('role_id', 1)
            ->first();
    }
    public function isClient() {

        return $this->role()
            ->where('role_id', 2)
            ->first();
    }

    public function doctor(){
        return $this->hasOne(Doctor::class,'user_id','id');
    }
    public function schedule(){
        return $this->hasMany(WorkSchedule::class,'user_id','id');
    }
    public function socialMedia(){
        return $this->hasOne(SocialLink::class,'user_id','id');
    }
}
