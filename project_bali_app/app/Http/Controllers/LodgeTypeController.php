<?php

namespace App\Http\Controllers;


use App\Http\Resources\LodgeTypeResource;
use Illuminate\Http\Request;

class LodgeTypeController extends Controller
{
    public function getAllTypes(){
        return LodgeTypeResource::collection(\App\Models\LodgeType::all());
    }
}
