<link rel="stylesheet" href="<?= $base_url_extension .'/asset/chat.css' ?>">

<div class="cool-chat" style="display: none;">
<i class="fa fa-commenting-o"></i> Chat <span class="chat-unread">10</span>
</div>

<div class="cool-chat-expand " style="display: none;">
	<div class="chat-header">
		Administrator
	</div>
	<div class="chat-history-wrapper">
	<div class="chat-history">
		<div class="chat-item user-left">
			<div class="chat-avatar">
				<img src="<?= base_url(); ?>uploads/user/default.png" alt="">
			</div>
			<div class="chat-message">
				halo..
			</div>
			<div class="chat-date-time">
				2019-01-03 22:42
			</div>
		</div>
		<div class="chat-item user-right">
			<div class="chat-avatar">
				<img src="<?= base_url(); ?>uploads/user/default.png" alt="">
			</div>
			<div class="chat-message">
				selamat siang, saya ridwan ada yang bisa saya bantu ? 
			</div>
			<div class="chat-date-time">
				2019-01-03 22:42
			</div>

		</div>
		<div class="chat-item user-right chat-item-typing">
			<div class="chat-avatar">
				<img src="<?= base_url(); ?>uploads/user/default.png" alt="">
			</div>
			<div class="chat-message">
				<img src="<?= $base_url_extension . '/asset/typing.svg'; ?>" width="30px" alt="">
			</div>

		</div>
	
	</div>
	</div>
	<div class="chat-user">
		<textarea name="" class="chat-message" placeholder="Type message.."></textarea>
		<div class="chat-user-footer">
			<a class="btn-chat-send pull-right">send</a>
			<a class="btn-chat-sticker pull-left">
				<center>
				<i class="fa fa-smile-o"></i> <br>sticker
				</center>
			</a>
			<a class="btn-chat-file pull-left">
				<center>
				<i class="fa fa-camera"></i> <br>image
				</center>
			</a>
		</div>
	</div>
</div>


<script src="<?= $base_url_extension .'/asset/autosize.min.js' ?>"></script>
<script type="text/javascript">

	function chat() {

	}

	function resizeChat() {
		var headHeight = $('.cool-chat-expand .chat-header').height();
		var chatUserHeight = $('.cool-chat-expand .chat-user').height();

		if (chatUserHeight < 300) {
		 $('.cool-chat-expand').height(chatUserHeight+350)
		}
		var chatExpandHeight = $('.cool-chat-expand').height();
		$('.chat-history').height(chatExpandHeight - (headHeight + chatUserHeight)-40);

	}

	$(function(){
		"use strict"; 
		resizeChat();

		$(document).on('keyup keypress keydown change','.chat-message', function(event) {
			resizeChat();
		});
	})
	setInterval(function(){
		$(`<div class="chat-item user-right">
			<div class="chat-avatar">
				<img src="/uploads/user/default.png" alt="">
			</div>
			<div class="chat-message">
				selamat siang, saya ridwan ada yang bisa saya bantu ? 
			</div>
			<div class="chat-date-time">
				2019-01-03 22:42
			</div>
		</div>
			`).insertBefore('.chat-item-typing')
		resizeChat();

		$('.chat-history').scrollTop(999999999);

	}, 2000)
	
	$(function(){
		"use strict"; 
	    autosize($('.chat-message'));

	    $('.chat-header').click(function(event) {
	    	//$('.cool-chat-expand').hide();
	    	$('.cool-chat-expand').animate({bottom:'-600'}, 'slow');
	    		$('.cool-chat').slideDown('fast');
	    	
	    });
	    $('.cool-chat').click(function(event) {
	    	$('.cool-chat-expand').animate({bottom:'0'}, 'slow');
	    		$('.cool-chat').slideUp('slow');
	    });
	})
</script>

