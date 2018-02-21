<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ChatRequest;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Chat::orderby('created_at','asc')->get();
        $users = DB::table('users')->get();

        return view('index', compact('chats','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chat = new chat;
        return view('create',compact('chat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ChatRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChatRequest $request)
    {
        $user = $request->user();

        $chat = $user->chats()->create($request->all());

        return redirect(route('chats.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
