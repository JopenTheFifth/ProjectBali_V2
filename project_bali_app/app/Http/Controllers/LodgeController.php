<?php

namespace App\Http\Controllers;

use App\Http\Resources\Lodge;
use App\Http\Resources\LodgeResource;
use App\Models\LodgeType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LodgeController extends Controller
{

    public function getAll(){
        return LodgeResource::collection(\App\Models\Lodge::all());
    }


    public function viewRelationalData($id){
        return Lodge::find($id)->type;
    }


    public function lodgesWithType($typeName){
        $lodges = \App\Models\Lodge::query()->whereHas('lodgeType', function(Builder $query) use($typeName){
            $query->where('name', $typeName);
        })->with('lodgeType')->get();
        return $lodges;
    }
}
