<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LodgeType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function lodge(){
        return $this->BelongsToMany(Lodge::class);
    }
}
