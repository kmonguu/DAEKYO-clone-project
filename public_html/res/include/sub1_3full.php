<style>
.swiper-sub1_3 {margin:0 auto; width:100%; height:905px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }
.swiper-sub1_3 .swiper-slide { position:relative; }

.swiper-pagination { position:absolute; left:1147px !important; top:350px !important; line-height:50px; color:rgba(0,0,0,.8);font-size:22px; font-weight:500; }
.swiper-pagination .swiper-pagination-bullet { display:none; outline:none;margin:0 -7px !important;}
.swiper-pagination .swiper-pagination-bullet-active { display:block;  background:rgba(0,0,0,0); border-radius:0px !important; opacity:1; color:rgba(0,0,0,0.8); }

.r_btn { position:absolute; right:0; outline:none;}
.l_btn { position:absolute; left:0; outline:none;}
.contral_stop,
.contral { padding-left:59px; }

</style>
	
<div class="swiper-container swiper-sub1_3" >
	<div style="position:absolute; width:1200px; height:410px; right:0; left:0; margin:0 auto; z-index:3;">
		<div class="swiper-pagination"></div>
		<div style="position:absolute; width:166px; height:49px; left:653px; bottom:0; z-index:3;" >
			<img class="r_btn" src="/res/images/subvisual/sub1/right.png" onmouseover="this.src='/res/images/subvisual/sub1/righta.png'" onmouseout="this.src='/res/images/subvisual/sub1/right.png'">

			<img class="contral" src="/res/images/subvisual/sub1/stop.png" onclick="sub1_3Stop()">

			<img class="l_btn" src="/res/images/subvisual/sub1/left.png" onmouseover="this.src='/res/images/subvisual/sub1/lefta.png'" onmouseout="this.src='/res/images/subvisual/sub1/left.png'">
		</div>
	</div>
	<div class="swiper-wrapper">
		<?for($i=1; $i<=5; $i++){?>
			<div style="background:url('/res/images/subvisual/sub1/sub1_3_<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
		
	</div>
</div>

<script>
	function sub1_3Stop() {
		swiper_sub.autoplay.stop();
		$(".contral").attr({"src" : "/res/images/subvisual/sub1/play.png", "onclick" : "sub1_3Play()"});
	}

	function sub1_3Play() {
		swiper_sub.autoplay.start();
		$(".contral").attr({"src" : "/res/images/subvisual/sub1/stop.png", "onclick" : "sub1_3Stop()"});
	}

	$(".l_btn, .r_btn").click(function() {
		$(".contral").attr({"src" : "/res/images/subvisual/sub1/stop.png", "onclick" : "sub1_3Stop()"});
	});

	var swiper_sub = null;

	$(function(){

		swiper_sub = new Swiper('.swiper-sub1_3', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 3000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:0,
						navigation: {
							nextEl: '.r_btn',
							prevEl: '.l_btn',
						},
						pagination: {
							el: '.swiper-pagination',
							type: 'bullets',
							bulletElement: 'span',
							clickable: 'false',
							renderBullet: function (index, className) {
								return '<span class="' + className + '">0' + (index + 1) + '&nbsp;&nbsp;<span style="font-size:15px; color:#9a9a9a;">05</span></span>';
							 },
						 },
						
						
						
					});


		

	});
</script>