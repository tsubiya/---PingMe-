<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $fillable = ['msg', 'from_user_id', 'to_user_id'];

    // A message belongs to a sender
    public function sender()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    // A message also belongs to a receiver    
    public function receiver()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    } 

    public function user()
   {
   		 return $this->belongsTo(User::class);
   }

	public function message()
   {
    	return $this->belongsTo(Message::class);
   }


}
