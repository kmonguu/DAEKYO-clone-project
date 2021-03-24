<style>
	.swiper-m2 { position:relative; width:1200px; height:100%;  margin:0 auto; z-index:1; }
	.swiper-m2 .swiper-slide { position:relative; height:100%; right:0; }
	.m2_more { position:absolute; width:171px; height:51px; border-top:1px solid #9f9f9f; border-bottom:1px solid #9f9f9f; bottom:135px; font-size:16px; font-weight:400; line-height:53px; text-align:center; left:17px; cursor:pointer; }

	.m2_more::before { position:absolute; width:17px; height:53px; content:""; background:url('res/images/mainvisual/m2/more_before.png') no-repeat center center; left:-16px; top:-1px;}
	.m2_more::after { position:absolute; width:17px; height:53px; content:""; background:url('res/images/mainvisual/m2/more_after.png') no-repeat center center; right:-16px; top:-1px; }

	.m2_more > img { margin-left:25px; }
	.m2_more > div { position:absolute; background:#074dbf; left:0; width:0; height:100%; transition:.6s all; z-index:-1;}

	.m2_more:hover { color:#fff; }
	.m2_more:hover > div { width:70%;}

	.arrow_bg { position:absolute; width:200px; height:65px; background:#222222; z-index:3; bottom:70px; left:0; right:0; margin:0 auto; float:left; text-align:center;}
	.arrow_bg > div { position:absolute; width:50%; height:100%; outline:none; cursor:pointer; top:21px; transition:.3s all}

	.left { left:10px; }
	.right { right:10px; }
	.left:hover { left:0; }
	.right:hover { right:0; }


</style>

<div style="position:relative; width:100%; height:622px; background:#f5f5f5;">

	<div class="swiper-container swiper-m2" >
		<div class="swiper-wrapper">
			<?for($i=1; $i<=5; $i++){?>
				<div style="background:url('/res/images/mainvisual/m2/<?=$i?>.jpg');width:100%; background-position:center top;" class="swiper-slide" >
					<div class="m2_more" onclick="menulink('menu01-3')">
						<div></div>
						READ MORE
						<img src="/res/images/mainvisual/m2/arrow.png" />
					</div>

				</div>
			<?}?>
		</div>

		<div class="arrow_bg">
			<div class="left"><img src="/res/images/mainvisual/m2/l_arrow.png"/></div>
			<div class="right"><img src="/res/images/mainvisual/m2/r_arrow.png"/></div>
		</div>
	</div>

</div>

<script>
	window.onload = function(){
	var swiper_mainvisual = null;
	$(function(){

		swiper_mainvisual = new Swiper('.swiper-m2', {
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
				nextEl: '.right',
				prevEl: '.left',
			}
		});
	});
	}

</script>
