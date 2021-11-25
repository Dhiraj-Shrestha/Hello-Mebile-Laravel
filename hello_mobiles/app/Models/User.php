<?php

namespace App\Models;


use App\Notifications\SecondHandProduct;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Notification;

// Notification::send($users, new ProductStock($stock));
// $user->notify(new ProductStock($stock));
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'profile_image',
        'user_type',
        'city',
        'remember_token',
        'area',
        'ward',
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function routeNotificationForOneSignal($notification)
    {
        return $this->onesignal;

    }

    public function receivesBroadcastNotificationsOn()
    {
        return 'users.'.$this->id;
    }

    public function secondhandproducts()
    {
        return $this->hasMany(SecondhandProduct::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

   
}
