@extends('layouts.app')

<!-- Styles -->
@section('css')
  @parant
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

        <div id="bottom-bar">
          {{-- <form method="post" action="{{ view('show') }}"> --}}
            {!! csrf_field() !!}
            <button type="submit" id="addcontact" class="btn btn-primary"> 채팅 추가 </button>
          {{-- </form> --}}
        </div>
      </div>

      <div class="content">
        <div class="contact-profile">
          <img src="/images/support.jpg" alt="" />
          <p> 상대방 </p>
        </div>
        <div class="messages">
          <ul class="chatlist">
            <li class="sent">
              <p> 친구가 보낸 글 </p>
            </li>

            <li class="replies">
              <p> 내가 쓴 글 </p>
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
            <div class="form-group">
                <input type="text" name="content" id="content" class="form-controller send_chat" placeholder="메시지 입력" />
                <button type="submit" class="btn btn-primary" onclick="submit()"> 전송 </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--   <script type="text/javascript">

    $(document).on('keydown','.send_chat', function(e) {
      var msg = $(this).val();
      var element = $(this);

      if (e.keyCode == 13 && !e.shiftKey) {
        $('.chatlist').append(
          '<li class="replies">' +
          '<p>' + msg + '</p>' +
          '</li>');
        element.val(' ');
      }
    });
  </script> -->
@endsection