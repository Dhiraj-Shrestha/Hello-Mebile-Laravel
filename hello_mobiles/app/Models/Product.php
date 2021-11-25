<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     public function subcategory()
     {
         return $this->belongsTo(SubCategory::class);
     }

     public function productimages()
     {
         return $this->hasMany(ProductImage::class);
     }

     public function wishlist()
     {
         return $this->hasMany(Wishlist::class);
      }

      public function reviews()
      {
          return $this->hasMany(Review::class);
      }

    //   public function invoiceDetail()
    //   {
    //       return $this->belongsTo(InvoiceDetails::class);
    //   }
      
}


