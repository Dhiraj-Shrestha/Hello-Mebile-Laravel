<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'productId' => $this->product_id,
            'comment' =>  $this->comment,
            'reviewDate' => $this->created_at->format('Y-m-d'),
            'name' => $this->user->name,
            'profileImage' => Config::get('constants.api.ip') . $this->user->profile_image,
            
        ];
    }
}
