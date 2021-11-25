<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetails extends Model
{
    use HasFactory;
    public function invoice()
     {
         return $this->belongsTo(Invoice::class);
     }

     public function products()
     {
         return $this->belongsTo(Product::class, 'product_id');
     }
}
