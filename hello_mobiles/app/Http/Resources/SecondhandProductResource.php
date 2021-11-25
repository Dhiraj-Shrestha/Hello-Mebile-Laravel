<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class SecondhandProductResource extends JsonResource
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
            'name' => $this->name,   
            'price' => $this->price,
            'description' => $this->description,
            // 'image' =>  Config::get('constant.api.ip').'/secondhand/feature/'.$this->image,
            'postedBy' => $this->user_id,
            'warrenty' => $this->warrenty,
            'expireDate' => $this->expire_date,
            'status' => $this->status,
            'showDetail' => $this->show_detail,
            'email'=> $this->users->email,
            'phoneNumber'=> $this->users->phone_number,
            'username'=> $this->users->name,
            'addedDate' =>  $this->created_at,
            //TODO:add phonenumber in register and here
            'city'=> $this->users->city,
            'area' => $this->users->area,
            'ward' => $this->users->ward,
            'memberSince' => $this->users->created_at,
            'detailImages' =>  $this->images,
        ];
    }
}
