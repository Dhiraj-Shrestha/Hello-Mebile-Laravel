<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'username' => $this->user->name,
            'city' => $this->user->city,
            'area' => $this->user->area,
            'ward' => $this->user->ward,
            'address' => $this->user->address,
            'phone' => $this->user->phone,
            'profileimage' => $this->user->profile_image,
            'total' => $this->total,
            'transaction_type' => $this->transaction_type,
            'transaction_status' => $this->transaction_status,
            'status' => $this->status,

            'invoice_id' => $this->id,
            'invoice_details' => $this->invoicedetails,
            'created_at' => $this->created_at->format('Y-m-d'),

        ];
    }
}
