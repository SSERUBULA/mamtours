<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // app/Models/User.php

protected $casts = [
    'email_verified_at' => 'datetime',
    'is_admin' => 'boolean',
];

protected $fillable = [
    'name',
    'email',
    'password',
    'is_admin', // optional to add if you want to mass assign
];
}
