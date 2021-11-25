<?php

namespace App\Http\Controllers;

use App\Notifications\ProductApprovedNotification;
use App\Notifications\ProductDeclinedNotification;
use Illuminate\Support\Facades\Notification;


class NotificationController extends Controller
{
    



    public function sendPushApproved($users,$username, $product)
    {
       

        // yo users chahi kaslai kaslia pathaune ho filter garrne ani pass garne
        Notification::send($users, new ProductApprovedNotification(['message' => 'Dear '.  $username.' your request for '.$product .' is approved']));
        // foreach ($users  as $user) {
        //     $notification = new ModelsNotification();
         
        //     $notification->user_id = $user;
          
        //     $productImage->save();
    }

    public function sendPushDeclined($users, $username, $product)
    {
        Notification::send($users, new ProductDeclinedNotification(['message' => 'Dear '.  $username.' your request for '.$product .' is declined']));
    }




   
}
