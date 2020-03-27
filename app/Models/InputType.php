<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputType extends Model
{
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
