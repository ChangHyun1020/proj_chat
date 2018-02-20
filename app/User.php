<?php

namespace App;

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

    /* releation */
    public function chats()
    {
        return $this->belongsToMany('App\Chat','chat_members')->withTimestamps()->withPivot('read','no_read');
    }

    public function chatMessages()
    {
        return $this->hasMany('App\ChatMessage');
    }
}
