<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var string[]
=======
     * @var array
>>>>>>> 88e1c92700c070c9226f716d73a2a5d2a2b297d9
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be hidden for serialization.
=======
     * The attributes that should be hidden for arrays.
>>>>>>> 88e1c92700c070c9226f716d73a2a5d2a2b297d9
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be cast.
=======
     * The attributes that should be cast to native types.
>>>>>>> 88e1c92700c070c9226f716d73a2a5d2a2b297d9
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
