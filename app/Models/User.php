<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username', 'password', 'is_admin', 'coins',
    ];

    // Uncomment the following line if you need to disable the hashing
    // protected $hidden = [
    //     'password',
    // ];
}
