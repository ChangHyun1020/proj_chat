<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';

    public function chatable()
    {
    	return $this->morphTo();
    }

    public function messages()
    {
    	return $this->hasMany('App\ChatMessage');
    }

    public function members()
    {
    	return $this->belongsToMany('App\User','chat_members')->withTimestamps();
    }
}
