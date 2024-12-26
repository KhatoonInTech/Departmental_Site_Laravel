<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    protected $fillable = [
        'name',
        'email',
        'auth_source'
    ];
 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
 
    public function isLinkedinUser()
    {
        return $this->auth_source === 'linkedin';
    }
 
    public function isGoogleUser() 
    {
        return $this->auth_source === 'google';
    }
}


