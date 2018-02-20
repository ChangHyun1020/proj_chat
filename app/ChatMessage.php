<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
	protected $table = 'chat_messages';

	protected $fillable = ['content','chat_id'];

	public function chat()
	{
		return $this->belongsTo('App\Chat');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
