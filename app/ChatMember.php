<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMember extends Model
{
    protected $table = 'chat_members';

    public function chat()
    {
    	return $this->belongsTo('App\Chat');
    }
}
