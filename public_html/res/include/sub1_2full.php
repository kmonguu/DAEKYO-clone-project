<style>
.sub1_2_tab { width:100%; height:72px; background:#f5f5f5; }
.sub1_2_tab > li { float:left; width:300px; height:100%; box-sizing:border-box; font-size:20px; line-height:72px; cursor:pointer;}
.sub1_2_tab > li:not(:last-child) { border-right:1px solid #cccccc; }
.sub1_2_tab > li.on { background:#074dbf; color:#fff; }


</style>

<div class="sub1_2_div"style="position:relative; width:1200px; margin:0 auto; text-align:center;">
	<ul class="sub1_2_tab">
		<li class="on">2020's</li>
		<li>1020's</li>
		<li>2000's</li>
		<li>1990's</li>
	</ul>
	<? for($i=1; $i<=4; $i++) {?>
		<img src="/res/images/subvisual/sub1/sub1_2_<?=$i?>.jpg" class="sub1_2img<?=$i?>" style="display:inline-block;">
	<?}?>
</div>

<script>

	$(".sub1_2_tab > li").click(function(){
		var index = $(this).index()+1;
		$(".sub1_2_tab > li").removeClass("on");
		$(this).addClass("on");
		$(".sub1_2_div > img").hide();
		$(".sub1_2img"+index).show();
	});
</script>