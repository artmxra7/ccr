<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guard = 'admin';
    protected $guard_name = 'web';
    public $timestamps = false;
    protected $with = ['roles', 'permissions'];

    protected $fillable = [
        'id','name', 'email', 'password', 'avatar', 'phone', 'company', 'occupation'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $attributes = [
        'is_dashboard' => 1,
    ];
}

