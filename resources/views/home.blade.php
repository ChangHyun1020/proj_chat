@extends('layouts.app')

@section('css')
	@pareant
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
						<p> 사용자 이름 </p>
						<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
						<div id="status-options">
							<ul>
								<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
								<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
								<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
								<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
							</ul>
						</div>
						<div id="expanded">
							<label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
							<input name="twitter" type="text" value="mikeross" />
							<label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
							<input name="twitter" type="text" value="ross81" />
							<label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
							<input name="twitter" type="text" value="mike.ross" />
						</div>
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
					<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span> 채팅 추가 </span></button>
					<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span> 설정 </span></button>
				</div>
			</div>
			<div class="content">
				<div class="contact-profile">
					<img src="/images/support.jpg" alt="" />
					<p>친구 이름 </p>
					<div class="social-media">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						 <i class="fa fa-instagram" aria-hidden="true"></i>
					</div>
				</div>
				<div class="messages">
					<ul>
						<li class="sent">
							<img src="/images/support.jpg" alt="" />
							<p> 친구가 보낸 글 </p>
						</li>

						<li class="replies">
							<img src="/images/support.jpg" alt="" />
							<p> 사용자가 쓴 글 </p>
						</li>
					</ul>
				</div>
				<div class="message-input">
					<div class="wrap">
					<input type="text" placeholder="메시지 입력" />
					<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
					<button class="submit"> 전송 </button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection