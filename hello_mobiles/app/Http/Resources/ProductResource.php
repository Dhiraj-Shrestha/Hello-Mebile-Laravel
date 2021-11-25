<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ProductResource extends JsonResource
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
            'id'=> $this->id,     
            'name' => $this->name,
            'price' => $this->price,
            'discount' => $this->discount,
            'availableStatus' => $this->available_status,
            'sellingPrice' => $this->selling_price,
            'description' => $this->description,
            'featureImage'=> Config::get('constant.api.ip').'uploadedFiles/'.$this->image,
            'category' => $this->subcategory->category->name,
            'detailImages' => $this->productimages,
            'reviewCount' => DB::table('reviews')->where('product_id', $this->id)->count(),
        ];
    }
}
