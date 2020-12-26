<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LodgeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'surface' => $this->surface,
            'price_per_night' => $this->price_per_night,
            'lodge_type_id' => $this->lodge_type_id,
            'lodge_type' => (new LodgeTypeResource($this->lodgeType)),
            'lodge_resource' => (new LodgeResourceResource($this->accommodationResources)),
            'lodge_review' => (new LodgeReviewResource($this->lodgeReviews)),
        ];
    }
}
