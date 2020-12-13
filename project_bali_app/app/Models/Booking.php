<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    public function lodge(){
        return $this->belongsTo(Lodge::class);
    }

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
