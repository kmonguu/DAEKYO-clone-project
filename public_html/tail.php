<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<?if(!defined("__INDEX")){?>
	<?if($bo_table){?>
	</div>
	<?}?>
	</section>
</section>
</div>
<?}?>

<? 
if(file_exists("{$g4[path]}/res/include/sub{$tott}full.php")) {
	include_once("$g4[path]/res/include/sub{$tott}full.php");
}else if(file_exists("{$g4[path]}/res/include/sub{$tot}full.php")) {
	include_once("$g4[path]/res/include/sub{$tot}full.php");
}else if(file_exists("{$g4[path]}/res/include/sub{$pageNum}full.php")) {
	include_once("$g4[path]/res/include/sub{$pageNum}full.php");
}?>

<div class="wrap-footer">
	<footer class="layout">
		<img src="/res/images/tail/go_top.png" onclick="gotoTop()" class="top"/>
		<div class="position1">
			<div style="position:relative; width:1200px; height:100%; margin:0 auto;">
				<img src="/res/images/tail/Q.png"/><span>계약자들의 편의를 위해 각종 안내 및 조회 서비스 제공해드립니다.</span>
				<ul>
					<li onclick="menulink('menu05-2')"><img src="/res/images/tail/ask.png" /><span>견적문의</span></li>
					<li onclick="menulink('menu06-1')"><img src="/res/images/tail/lib.png" /><span>자료실</span></li>
				</ul>
			</div>
		</div>

		<div class="position2">
			<div style="position:relative; width:1200px; height:100%; margin:0 auto; box-sizing:border-box; padding-top:32px;">
				<span>본사.경기도 화성시 정남면 만년로 89번길 49-14 &nbsp;&nbsp;제주사업장.제주특별자치도 제주시 통물길 148-2</span></br>
				<span>법인등록번호. 124811-0510570 &nbsp;&nbsp;사업자등록번호. 284-88-01319</span></br>
				<span>Tel. 031-8059-2011 &nbsp;&nbsp; FAX. 031-8059-2012 &nbsp;&nbsp; E-mail. daekyoco@naver.com</span></br>
				<span style="margin-top:22px; display:inline-block;">Copyright &copy 2020 daekyo. All Rights Reserved. <img src="/res/images/tail/it9.png" onclick="it9()" style="cursor:pointer;"/> </span>
				<ul>
					<li onclick="guide2()">이용약관</li>
					<li onclick="info2()">개인정보처리방침</li>
					<li onclick="adm()">관리자페이지</li>
				</ul>
				<img src="/res/images/tail/ci.png" onclick="home()" style="position:absolute; right:0; bottom:66px;"/>
			</div>	

		</div>
	</footer>

</div>

</div>

<?
include_once("$g4[path]/tail.sub.php");
?>