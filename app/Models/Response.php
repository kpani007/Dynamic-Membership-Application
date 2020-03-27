<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
