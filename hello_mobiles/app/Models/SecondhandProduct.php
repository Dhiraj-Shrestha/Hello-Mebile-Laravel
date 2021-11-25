<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\SecondHandProduct as SecondHand;
use App\Notifications\SecondHandProducts;
use Illuminate\Notifications\Notifiable;

class SecondhandProduct extends Model
{
    use HasFactory;
    use Notifiable;
    public function images()
    {
        return $this->hasMany(SecondhandProductImages::class,'product_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class,'approved_by');
    }

    public function sendNotification()
    {
        $this->notify(new SecondHandProducts($this)); //Pass the model data to the OneSignal Notificator
    }

    public function routeNotificationForOneSignal()
    {
        /*
         * you have to return the one signal player id tat will
         * receive the message of if you want you can return
         * an array of players id
         */

        return $this->data->user_one_signal_id;
    }
    
}
