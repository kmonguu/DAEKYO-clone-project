<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>

<style>
	.notice { position:relative; width:590px; height:235px; border:1px solid #cfcdce; float:left; box-sizing:border-box; padding:66px 0 0 46px; margin:20px 0 0 20px; cursor:pointer;}
	.notice > div { overflow:hidden; text-overflow:ellipsis; white-space:normal; word-wrap:break-word; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; word-break:break-all; }

	.notice:hover > span:nth-child(2n+1) { width:100%; }
	.notice:hover > span:nth-child(2n) { height:100%; }

	.notice_title { text-align:left; font-size:20px; font-weight:400; color:#000; }
	.notice_content { height:60px; margin-top:15px; text-align:left; font-size:18px; font-weight:300; color:#222; }
	.notice_date { font-size:18px; font-weight:300; }

</style>

<? for ($i=0; $i<2; $i++) {?> 
	<div class="notice" onclick="location.href='<?=$list[$i][href]?>'" <?=$i==0 ? "style='margin-left:0px;'" : ""?>>

		<? border() ?>

		<div class="notice_title">
			<?=cut_str($list[$i][wr_subject],58, '...');?>
		</div>

		<div class="notice_content">
			<?=strip_tags(cut_str($list[$i][wr_content], 300, '...'));?>
		</div>

		<div class="notice_date">
			<p><?=date("Y.m.d",strtotime($list[$i][wr_datetime]));?></p>
		</div>
		<? if (count($list) == 0) { ?><font color=#6A6A6A>게시물이 없습니다.<? } ?>
	</div>
<?}?>
