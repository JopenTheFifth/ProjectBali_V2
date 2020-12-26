<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccommodationResource extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'resource_name';
    public $incrementing = false;

    public function lodges(){
        return $this->belongsToMany(Lodge::class);
    }
}
