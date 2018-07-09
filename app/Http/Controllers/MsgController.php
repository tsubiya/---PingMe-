<?php

namespace App\Http\Controllers;
use App\User;
use App\Message;

use Illuminate\Http\Request;

class MsgController extends Controller
{   

    /*
    Sending messages to other users

    */

     public function sendMessage(Request $request)
    {
       
       Auth::user()->sent()->create([
            'msg'       => $request->msg,
            'to_user_id' => $request->recipient,
        ]);

$messages = Message::where('to_user_id', '=', Auth::user()->name)->get();
        
$users = User::where('id', '!=', Auth::id())->get()->pluck('name', 'id');

            return view('displayAll')->with(compact('messages', 'users'));

   }

    public function composeMessage()
    {
        
        
        Auth::user()->sendMessageTo($request->recipient, $request->msg);
        return view('msg', compact('users'));
    }
    
     
    public function conversation(Request $request,$id)

    /* Building conversation between two users
    */
    {
    $conv = new Messsage();
    $conv->user_id = Auth::user()->id;
    $to_user_id = User::where('id', $id)->first();
    $conv->to_user_id = $to_user_id;
    $conv->msg = $request->input('msg');
    $conv->save();

    }
     $conv = Message::find($id);
         
        $from_user_id =Message::all()
        ->select('message', 'user_id as from_user_id', 'to_user_id as from_user_id')
        ->where('user_id', Auth::user()->id)
        ->where('to_user_id', $to_user_id);

        // 
        $conversation = Message::all()
        ->select('message', 'user_id as from_user_id' 'to_user_id as from_user_id')
        ->where('user_id', $to_user_id)
        ->where('to_user_id', Auth::user()->id)
        ->union($from_user_id)
        ->orderBy('created_at', 'asc')
        ->get(); 

        return View::make('conversation')
             ->with('conversation', $conversation)
             ->with('message',Mesaage::all())
            ->with('user', User::find($id));
   
   }
