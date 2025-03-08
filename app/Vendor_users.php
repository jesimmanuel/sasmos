<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor_users extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email', 'password'
    ];
    protected $table = 'vendor_users';
}
