<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $casts = [
        'password' => 'hashed',
    ];

    protected $fillable = [
        'name',
        'designation',
        'age',
        'email',
        'phone',
        'address',
        'occupation',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
