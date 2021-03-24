<style>
.swiper-mainvisual { width:100%; min-width:1200px; max-width:1919px; height:567px; position:relative; margin:0 auto; z-index:1; }
.swiper-mainvisual .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:567px; position:relative; margin:0 auto; }

.prev,
.next { position:absolute; top:50%; width:120px; height:54px; z-index:3; padding-top:25px; box-sizing:border-box; outline:none; cursor:pointer; transition:.3s; }

.prev > div:first-child,
.next > div:first-child { position:absolute; top:0; width:0; height:100%; background:#fff; transition:.3s all ease-in-out;  }

.prev:hover > div:first-child,
.next:hover > div:first-child { width:100%;}

.prev > div:last-child,
.next > div:last-child {position:absolute; height:2px; width:46px; background:#fff;transition:.3s;}

.prev:hover > div:last-child,
.next:hover > div:last-child { background:#000; }

.prev > span,
.next > span {position:absolute; font-size:15.05px; font-weight:400; color:#fff; padding-left:56px; top:14px; transition:.3s;}

.prev:hover > span,
.next:hover > span { color:#000; }


</style>

<div class="swiper-container swiper-mainvisual" >
	<div class="swiper-wrapper">
		<?for($i=1; $i<=6; $i++){?>
			<div style="background:url('/res/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div style="position:relative; width:653px; height:190px; margin:0 auto; top:35%;">
					<img src="/res/images/mainvisual/cache_ci.png" style="padding:0 0 30px 139px;" class="wow fadeInUp" data-wow-delay="0.2s" />
					<img src="/res/images/mainvisual/cache_content.png" class="wow fadeInUp" data-wow-delay="0.4s"/>
				</div>
			</div>
		<?}?>
	</div>
	<div class="prev" style="left:0;">
		<div style="left:0;"></div>
		<span>PREV</span>
		<div></div>
	</div>

	<div class="next" style="right:0;">
		<div style="right:0;"></div>
		<span style="padding-left:23px; ">NEXT</span>
		<div style="right:0;"></div>
	</div>
</div>
	



<script>
	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-mainvisual', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
							transitionStart:function(){
								
							},
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
						navigation: {
							nextEl: '.next',
							prevEl: '.prev',
						},
		});
	});
</script>

