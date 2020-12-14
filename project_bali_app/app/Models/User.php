<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




//As a rule of thumb, if you use a belongsToMany relationship, it can only be paired with another belongsToMany relationship
//and means that you have a third pivot table. If you use a hasMany relationship, it can only be paired with a belongsTo relationship
//and no extra database tables are required.


    //define relationships
    public function favorites(){
        return $this->hasMany(UserLodgeFavorites::class);
    }

    public function reviews(){
        return $this->hasMany(LodgeReview::class);
    }


    public function roles(){
        return $this->belongsToMany(UserRole::class);
    }

}
