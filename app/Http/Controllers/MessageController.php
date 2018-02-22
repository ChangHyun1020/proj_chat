<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function fetch()
    {
    	return \App\Message::with('user')->get();
    }

    public function sentMessage()
    {
    	$user = Auth::user();

    	$message = $user->messages()->create([
    		'message' => request()->message
    	]);

    	broadcast(new MessageSentEvent($user, $message));
    }
}
