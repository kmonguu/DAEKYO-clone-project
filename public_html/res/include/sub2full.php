<? 
	$imgNumber = glob("$g4[path]/res/images/subvisual/sub2/sub2_".$subNum."/sub2_".$subNum."_".$ssNum."/*.jpg");
?>
<style>
	.swiper-sub2 { width:1200px; height:593px; position:relative; margin: 0 auto; z-index:3; padding-bottom:80px; }
	.swiper-sub2 > a { position:absolute; width:83px; height:117px; display:block; right:111px; bottom:167px; z-index:100; }

	.sub2_tab { width:1200px; height:72px; background:#f5f5f5; margin:0 auto; text-align:center; margin-bottom:51px; }
	.sub2_tab > li { float:left; height:100%; box-sizing:border-box; font-size:20px; line-height:72px; cursor:pointer;}
	.sub2_tab > li:not(:last-child) { border-right:1px solid #cccccc; }
	.sub2_tab > li > a { color:#000; display:block; }
	.sub2_tab > li.on { background:#074dbf; }
	.sub2_tab > li.on > a { background:#074dbf; color:#fff; }

	.arrow_sub2 { position:absolute; width:200px; height:65px; background:#222222; z-index:3; top:131px; right:40px; float:left; text-align:center;}
	.arrow_sub2 > div { position:absolute; width:50%; height:100%; outline:none; cursor:pointer; top:21px; transition:.3s all}

	.sub2_left { left:10px; }
	.sub2_right { right:10px; }
	.sub2_left:hover { left:0; }
	.sub2_right:hover { right:0; }

</style>
<div style="width:1200px; margin:0 auto; ">
	<ul class="sub2_tab">
		<?foreach($menu["tott"][$pageNum][$subNum] as $ssn => $ssnStr) {?>
			<li style="width:<?=1200/count ($menu["tott"][$pageNum][$subNum])?>px;"<?=$tott == $pageNum."_".$subNum."_".$ssn ? "class='on'" : ""?>>
				<a href="#menulink" onclick="menulink('menu<?=sprintf("%02d", $pageNum)?>-<?=$subNum?>-<?=$ssn?>')"><?=$ssnStr?></a>
			</li>
		<?}?>
	</ul>
</div>

<div class="swiper-container swiper-sub2" >
	<? if($subNum==1) {?>
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=count($imgNumber); $i++){?>
				<div style="background:url('/res/images/subvisual/sub2/sub2_<?=$subNum?>/sub2_<?=$subNum?>_<?=$ssNum?>/<?=$i?>.jpg');width:100%; background-position:no-repeat center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
		<a  href="<?=$g4["bbs_path"]?>/download.php?bo_table=9_1_1_1&wr_id=1&no=0" download></a>
		<div class="arrow_sub2">
			<div class="sub2_left"><img src="/res/images/mainvisual/m2/l_arrow.png"/></div>
			<div class="sub2_right"><img src="/res/images/mainvisual/m2/r_arrow.png"/></div>
		</div>

	<?}else{?>
		<img src="/res/images/subvisual/sub2/sub2_<?=$subNum?>/<?=$ssNum?>.jpg">
	<?}?>

</div>


<script>

	var swiper_gallery = null;
	$(function(){
		swiper_gallery = new Swiper('.swiper-sub2', {
			spaceBetween: 0,
			centeredSlides: true,
			autoplay: {
				delay: 3000,
			},
			disableOnInteraction: false,
			effect:'fade',
			speed: 1000,
			loop:true,
			slidesPerView:'auto',
			observer:true,
			simulateTouch: false,
			on:{
				transitionStart:function(){ },
				transitionEnd:function(){
					this.autoplay.stop();
					this.autoplay.start();
				}
			},
			navigation: {
				nextEl: '.sub2_right',
				prevEl: '.sub2_left',
			}
		});
	});
</script>