<?php

namespace App\Http\Controllers;

use App\Http\Resources\Lodge;
use App\Http\Resources\LodgeResource;
use Illuminate\Http\Request;

class LodgeController extends Controller
{

    public function getAll(){
        return LodgeResource::collection(\App\Models\Lodge::all());
    }


    public function viewRelationalData($id){
        return Lodge::find($id)->type;
    }
}
