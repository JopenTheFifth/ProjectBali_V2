<?php

namespace App\Models;

use Database\Factories\LodgeTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lodge extends Model
{
    use HasFactory;

    //make all fields assignable
    protected $guarded = [];


    //relations

    public function lodgeReviews(){
        return $this->hasMany(LodgeReview::class);
    }

    public function lodgeImages(){
        return $this->hasMany(LodgeImage::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function accommodationResources(){
        return $this->belongsToMany(AccommodationResource::class);
    }

    public function lodgeType(){
        return $this->belongsTo(LodgeType::class);
    }
}
