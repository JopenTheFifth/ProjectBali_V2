<?php

namespace App\Http\Controllers;

use App\Http\Resources\Lodge;
use App\Http\Resources\LodgeResource;
use App\Models\LodgeType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class LodgeController extends Controller
{

    public function getAll(){
        return LodgeResource::collection(\App\Models\Lodge::all());
    }


    public function viewRelationalData($id){
        return Lodge::find($id)->type;
    }


    public function lodgesWithType($typeName, $max_person = null){
        
        if($typeName == 'all'){
            $lodges = \App\Models\Lodge::with('lodgeType')->get();

            if(!empty($max_person)){
               return $lodges->where('max_person', '<=', $max_person);
            }
            return $lodges;
        }

        $lodges = \App\Models\Lodge::query()->whereHas('lodgeType', function(Builder $query) use($typeName){
            $query->where('name', $typeName);
        })->with('lodgeType')->get();

        if(!empty($max_person)){
           $lodges = $lodges->where('max_person',  '<=' , $max_person);
        }
        return $lodges;
    }
}
