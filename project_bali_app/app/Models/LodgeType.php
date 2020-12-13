<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LodgeType extends Model
{
    use HasFactory;

    public function lodge(){
        return $this->hasMany(Lodge::class);
    }
}
