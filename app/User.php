<?php

namespace App;
use App\Message;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // A user can send a message
public function sent()
    {
        return $this->hasMany(Message::class, 'from_user_id');
    }

    // A user can also receive a message
    public function received()
    {
        return $this->hasMany(Message::class, 'to_user_id');
    }

    public function message()
   {
        return $this->belongsTo(Message::class);
   }
    public function user()
   {
         return $this->belongsTo(User::class);
   }


   public function sendMessageTo($recipient, $message)
    {

        Auth::user()->sendMessageTo($request->recipient, $request->msg);

    }

}
