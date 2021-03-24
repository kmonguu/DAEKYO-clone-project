<style>
	.sub3_tab { position:relative; width:289px; height:393px; float:left; margin-right:12px; background:#fff; border:1px solid #ccc; cursor:pointer;}
	.sub3_tab:last-child { margin-right:0; }
	.sub3_tab > img { display:block; }

	.sub3_tab:hover > span:nth-child(2n+1) { width:100%; }
	.sub3_tab:hover > span:nth-child(2n) { height:100%; }
	.sub3_tab:hover > .sub3_info { display:block; }
	.sub3_tab:hover > .sub3_img > img { transform:scale(1.1); }

	.sub3_info { position:absolute; z-index:3; width:153px; height:50px; background:#074dbf; font-size:17px; color:#fff; line-height:50px; text-align:center; bottom:-18px; right:-5px; display:none; cursor:pointer;}
	.sub3_info > img { margin-left:20px; } 

	.sub3_img { width:100%; height:228px; overflow:hidden; }
	.sub3_img > img { transition:.5s all ease-out; }

</style>

<div style="position:relative; width:1200px; margin:0 auto;">
	<img src="/res/images/subvisual/sub3/<?=$subNum?>.jpg">
	
	<div style="width:100%; display:inline-block; padding-bottom:80px; ">
		<?for($i=1; $i<=4; $i++) {?>
			<div class="sub3_tab" onclick="menulink('menu03-<?=$i?>')" >
				<? border() ?>
				<div class="sub3_img"><img src="/res/images/subvisual/sub3/tab/<?=$i?>.jpg"/></div>
				<img src="/res/images/subvisual/sub3/tab/info/<?=$i?>.png" style="margin:0 auto; padding-top:41px;">
				<div class="sub3_info" onclick="menulink('menu')">더보기<img src="/res/images/mainvisual/m1/more.png"/></div>	
			</div>
		<?}?>
	</div>
</div>