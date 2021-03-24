<style>
.m1_1 { position:relative; height:166px; padding:60px 310px; box-sizing:border-box; }
.m1_1 > img { vertical-align:middle; }
.m1_1 > p { position:relative; bottom:52px; left:45px; font-size:35px; font-weight:400; }

.m1_2 { height:434px; }
.m1_2 > div { position:relative; width:370px; height:361px; float:left; margin-right:30px; box-sizing:border-box; box-shadow:3px 4px 10px 0 rgba(0,0,0,.2); }
.m1_2 > div > div { position:absolute; z-index:3; width:153px; height:50px; background:#074dbf; font-size:17px; color:#fff; line-height:50px; text-align:center; bottom:-18px; right:-12px; display:none; cursor:pointer;}
.m1_2 > div > div > img { margin-left:20px; } 

.m1_2 > div:hover > div { display:block; }
.m1_2 > div:hover > span:nth-child(2n+1) { width:100%; }
.m1_2 > div:hover > span:nth-child(2n) { height:100%; }
</style>

<div style="width:1200px; margin:0 auto;">
	<div class="m1_1">
		<img src="/res/images/mainvisual/m1/ci.png" />
		<p>(주)대교산업에 오신것을 환영합니다.</p>
	</div>

	<div class="m1_2">
		<?for($i=1; $i<=3; $i++){?>
			<div style="background:url('/res/images/mainvisual/m1/<?=$i?>.png') no-repeat center center;">
				<? border() ?>
				<div onclick="menulink('menu01-<?=$i?>')">더보기<img src="/res/images/mainvisual/m1/more.png"/></div>	
			</div>
		<?}?>
	</div>
</div>