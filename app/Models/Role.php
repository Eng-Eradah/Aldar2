<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];
    public const ADMIN = 'admin';
    public const USER = 'user';
    public const LAWYER = 'lawyer';

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->using('App\Models\UserRole');
    }
}
