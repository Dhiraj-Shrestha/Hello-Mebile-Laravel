<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceDetailsResource extends JsonResource
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


            'invoice_id' => $this->invoice_id,
            // 'product_id' => $this->product,
            // 'product_id' => $this->product->id,
            'product_name' => $this->products->name,
            'product_image' => $this->products->image,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'created_at' => $this->created_at,

        ];

    }
}
