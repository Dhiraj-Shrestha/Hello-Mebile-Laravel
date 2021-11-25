<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class SubCategoryResource extends JsonResource
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
            'id' => $this->id,     
            'name' => $this->name,
            'productCount' => DB::table('products')->where('subcategory_id', $this->id)->count(),
            'image' => Config::get('constant.api.ip'). 'subCategoryImage/'. $this->image,
           
        ];
    }
}
