<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Institution extends Authenticatable
{

    protected $fillable = [
        'name_english', 'name_other', 'phone', 'position'
    ];
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
