<?php

namespace App\Http\Controllers;
use App\User;
use App\Message;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('user',User::where(user->name())
       

       /*  Any visitor to view all messages 20 messages per page*/                     
      
     $messages = Messages::orderBy('created_at', 'desc')->paginate(20);

     $display_items_id = array();
     foreach ( $messages as $message){

       array_push($display_items_id , msg->id );

        }

     $get_all_messages_with_pagination = Message::whereIn('id' , $display_items_id )->paginate(20) ;
                            
}
    

    /**
     
     */
    public function Single($slsug)
    {
        $message = Message::where('slug',$slug)->take(1)->get();
        $next_id = Message::where('id','>',$message_id)->min('id');
        $prev_id = Message::where('id','<',$message_id)->max('id'):

        return view('allmsg')->with('msg',$message)
                             ->with('next',Message::find($next_id))
                             ->with('prev',Message::find($prev_id))
    }

    public function Sent()
    {

     return view('sent')->with('msg',Message::where(msg->to_user_id())
                        ->with('msg', Messages::orderBy('created_at', 'desc')->paginate(20))
                       -> with('user',User::where(user->name());

    }

public function recv()
    {

     return view('recv')->with('msg',Message::where(msg->from_user_id());
                        ->with('msg' ,Messages::orderBy('created_at', 'desc')->paginate(20))
                        ->with('user',User::where(user->name());
    }