<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lodge extends Model
{
    use HasFactory;

    //make all fields assignable
    protected $guarded = [];

    //relations

    public function reviews(){
        return $this->hasMany(LodgeReview::class);
    }

    public function images(){
        return $this->hasMany(LodgeImage::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function resources(){
        return $this->belongsToMany(AccomodationResource::class);
    }

    public function type(){
        return $this->belongsTo(LodgeType::class);
    }

}
