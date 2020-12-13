<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccomodationResource extends Model
{
    use HasFactory;



    public function lodges(){
        return $this->belongsToMany(Lodge::class);
    }
}
