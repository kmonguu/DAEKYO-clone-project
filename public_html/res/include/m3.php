<style>
	.m3_1 > span:nth-child(1) { font-size:50px; font-weight:bold; }
	.m3_1 > span:nth-child(2) { font-size:35px; font-weight:400; }
	.m3_line { position:relative; top:-26px; left:350px; width:244px; height:2px; background:#000; }

	.m3_more { position:absolute; width:171px; height:51px; border-top:1px solid #9f9f9f; border-bottom:1px solid #9f9f9f; top:22px; font-size:16px; font-weight:400; line-height:53px; text-align:center; right:17px; cursor:pointer;}

	.m3_more::before { position:absolute; width:17px; height:53px; content:""; background:url('res/images/mainvisual/m2/more_before.png') no-repeat center center; left:-16px; top:-1px;}
	.m3_more::after { position:absolute; width:17px; height:53px; content:""; background:url('res/images/mainvisual/m2/more_afterw.png') no-repeat center center; right:-16px; top:-1px; }

	.m3_more > img { margin-left:25px; }
	.m3_more > div { position:absolute; background:#074dbf; left:0; width:0; height:100%; transition:.6s all; z-index:-1;}

	.m3_more:hover { color:#fff; }
	.m3_more:hover > div { width:70%;}

</style>

<div style="position:relative; width:100%; height:491px;">
	<div style="position:relative; width:1200px; height:100%; margin:0 auto; margin-top:89px;">
		<div class="m3_1">
			<span>NOTICE</span>&nbsp;&nbsp;&nbsp;<span>공지사항</span><div class="m3_line"></div>

			<div class="m3_more" onclick="menulink('menu05-1')">
				<div></div>
				READ MORE
				<img src="/res/images/mainvisual/m2/arrow.png" />
			</div>
		</div>
		
		<?=latest("basic", "5_1_1_1",  12, 35);?>
	</div>

</div>