@extends('layouts.app')

<!-- Styles -->
@section('css')
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
</style>
@stop

@section('js')
    @param

@stop

@section('content')
  <div class="container">
    <div id="frame">
      <div id="sidepanel">
        <div id="profile">
          <div class="wrap">
            <img id="profile-img" src="/images/support.jpg" class="online" alt="" />
            <p> Name </p>
          </div>
        </div>
        <div id="search">
          <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
          <input type="text" placeholder="검색" />
        </div>
        <div id="contacts">
          <ul>
            <li class="contact">
              <div class="wrap">
                <span class="contact-status online"></span>
                <img src="/images/support.jpg" alt="" />
                <div class="meta">
                  <p class="name"> 친구 1 </p>
                  <p class="preview"> 메시지 1 </p>
                </div>
              </div>
            </li>

            <li class="contact active">
              <div class="wrap">
                <span class="contact-status busy"></span>
                <img src="/images/support.jpg" alt="" />
                <div class="meta">
                  <p class="name">친구 2</p>
                  <p class="preview"> 메시지 2 </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div id="bottom-bar">
          <form method="post" action="{{ view('show') }}">
            {!! csrf_field() !!}
            <button type="submit" id="addcontact" class="btn btn-primary"> 채팅 추가 </button>
          </form>
        </div>
      </div>
      <div class="content">
        <div class="contact-profile">
          <img src="/images/support.jpg" alt="" />
          <p>친구  </p>
          <div class="social-media">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
             <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>
        </div>
        <div class="messages">
          <ul id="chatlist">
            <li class="sent">
              <p> 친구가 보낸 글 </p>
            </li>

            <li class="replies">
              <p> 사용자가 쓴 글 </p>
            </li>
            @foreach($chats as $chat)
                <li class="replies">
                    <p> {{ $chat->content }}
                        {{-- <small> by {{ $chat->user->id }} </small> --}}
                    </p>
                </li>
            @endforeach
          </ul>
        </div>
        <div class="message-input">
          <div class="wrap">
            <form method="post" action="{{ route('chats.store') }}">
              {!! csrf_field() !!}
              @include('partial.form')
              <div class="form-group">
                <button type="submit" class="btn gtn-primary"> 전송 </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection