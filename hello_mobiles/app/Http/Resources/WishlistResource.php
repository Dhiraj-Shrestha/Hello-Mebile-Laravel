<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class WishlistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $product = $this->whenLoaded('products');
        //return parent::toArray($request);
        return [
            'wishListId' => $this->id,
            // PostResource::collection($this->posts),
            // 'product' => ProductResource::collection($this->products), 
            // 'product' => $this->products,
            'id' => $this->products->id, 
            'name' => $this->products->name,
            'price' => $this->products->price,
            'discount' => $this->products->discount,
            'availableStatus' => $this->products->available_status,
            'sellingPrice' => $this->products->selling_price,
            'description' => $this->products->description,
            'featureImage'=> Config::get('constant.api.ip').'uploadedFiles/'.$this->products->image,
            
            'category' =>  $this->products->subcategory->category->name,
            'detailImages' => $this->products->productimages
    
           
        ];

    }
}
