<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'question'
    ];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function input_type()
    {
        return $this->belongsTo(InputType::class);
    }
}
