function home(){location.href="/index.php";} // 홈
function register(){location.href="/bbs/register.php";} // 회원가입
function adm(){location.href="/adm";} //관리자
function login(){location.href="/bbs/login.php?url=/index.php";} //로그인
function logout(){location.href="/bbs/logout.php?url=/index.php";} //로그아웃
function cart(){location.href="/shop/cart.php";} //장바구니
function mypage(){location.href="/shop/mypage.php";} //마이페이지
function sand(){location.href="/bbs/login.php?url=..%2Fshop%2Forderinquiry.php";} //비회원배송조회
function info(){location.href="/bbs/register.php";} //개인정보취급방침
function guide(){location.href="/community/guidance.php";} //이용안내
function find(){location.href="javascript:win_password_lost();";} //아이디/비밀번호찾기
function revision(){location.href="/bbs/member_confirm.php?url=register_form.php";} //회원정보수정
//로그인페이지항시추가
function guide2(){location.href="/pages.php?p=100_6_1_1";} //이용약관
function info2(){location.href="/pages.php?p=100_7_1_1";} //개인정보취급방침
function email2(){location.href="/pages.php?p=100_16_1_1";} //이메일무단수집거부
function it9(){window.open("http://it9.co.kr/bbs/board.php?bo_table=portfolio");} //아이티나인
function cube(){window.open("http://jejucube.com/bbs/board.php?bo_table=3_1_1_1");} //큐브
function jlink(){window.open("http://j-link.co.kr/bbs/board.php?bo_table=2_1_1_1&sca=%EA%B8%B0%EB%B3%B8%ED%98%95");} //제이링크
function roomnet02(){window.open("http://jejuroom.net/bbs/login.php?url=%2Fadm%2Findex.php%3F");} //룸넷

function info3(){window.open('/privacy.html','','width=675,height=670,scrollbars=yes')} //개인정보취급방침 팝업창
function info4(){window.open('http://www.ftc.go.kr/info/bizinfo/communicationList.jsp')} //사업자정보확인
function load(){window.open('/map.html','','width=750,height=620')} //오시는길 팝업창
function img(){location.href="/swf/img.zip";} //사진다운로드
//function travel(){var test = window.open('http://tourinfo.1937.co.kr/swf/main1.swf', '', 'fullscreen=yes,scrollbars=yes');} //travel
function travel(){ window.open('/travel.php', '', 'fullscreen=yes,scrollbars=yes') }//travel

function bookmark() {
 
 url = g4_url2; //즐겨찾기에 추가할 곳의 url
 title="사이트명"//사이트명
 // Internet Explorer
 if(document.all)
 {
  window.external.AddFavorite(url, title);
 }
 // Google Chrome
 else if(window.chrome){
  alert("이 브라우저는 Ctrl+D 키를 눌러서 \n즐겨찾기추가를 하셔야 합니다 ^^;");
 }
 // Firefox
 else if (window.sidebar) // firefox
 {
  window.sidebar.addPanel(title, url, "");
 }
 // Opera
 else if(window.opera && window.print)
 { // opera
  var elem = document.createElement('a');
  elem.setAttribute('href',url);
  elem.setAttribute('title',title);
  elem.setAttribute('rel','sidebar');
  elem.click();
 } else {
		var rv = -1;
		if (navigator.appName == 'Netscape')
		{
			var ua = navigator.userAgent;
			var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
			if (re.exec(ua) != null)
			rv = parseFloat( RegExp.$1 );

			if(rv >= 11){
				  alert("이 브라우저는 Ctrl+D 키를 눌러서 \n즐겨찾기추가를 하셔야 합니다 ^^;");
			}
		}
 }
}

function menulink(link_go) {
	switch ( link_go ) {

		case 'menu01-1' : //인사말
		location.href="/pages.php?p=1_1_1_1"; break;
		case 'menu01-2' : //주요연혁
		location.href="/pages.php?p=1_2_1_1"; break;
		case 'menu01-3' : //사업소개
		location.href="/pages.php?p=1_3_1_1"; break;


		case 'menu02-1' ://타워크레인
		location.href="/pages.php?p=2_1_1_1"; break;
			case 'menu02-1-1' :
			location.href="/pages.php?p=2_1_1_1"; break;
			case 'menu02-1-2' :
			location.href="/pages.php?p=2_1_2_1"; break;
			case 'menu02-1-3' :
			location.href="/pages.php?p=2_1_3_1"; break;

			
		case 'menu02-2' ://건설용리프트
		location.href="/pages.php?p=2_2_1_1"; break;
			case 'menu02-2-1' :
			location.href="/pages.php?p=2_2_1_1"; break;
			case 'menu02-2-2' :
			location.href="/pages.php?p=2_2_2_1"; break;
			case 'menu02-2-3' :
			location.href="/pages.php?p=2_2_3_1"; break;
			case 'menu02-2-4' :
			location.href="/pages.php?p=2_2_4_1"; break;
			case 'menu02-2-5' :
			location.href="/pages.php?p=2_2_5_1"; break;


		case 'menu02-3' ://고소작업대
		location.href="/pages.php?p=2_3_1_1"; break;
			case 'menu02-3-1' :
			location.href="/pages.php?p=2_3_1_1"; break;
			case 'menu02-3-2' :
			location.href="/pages.php?p=2_3_2_1"; break;


		case 'menu02-4' ://하이드로크레인
		location.href="/pages.php?p=2_4_1_1"; break;
			case 'menu02-4-1' :
			location.href="/pages.php?p=2_4_1_1"; break;
			case 'menu02-4-2' :
			location.href="/pages.php?p=2_4_2_1"; break;
			case 'menu02-4-3' :
			location.href="/pages.php?p=2_4_3_1"; break;
			case 'menu02-4-4' :
			location.href="/pages.php?p=2_4_4_1"; break;
			case 'menu02-4-5' :
			location.href="/pages.php?p=2_4_5_1"; break;



		case 'menu03-1' ://수출/수입
		location.href="/pages.php?p=3_1_1_1"; break;
		case 'menu03-2' ://제조
		location.href="/pages.php?p=3_2_1_1"; break;
		case 'menu03-3' ://서비스
		location.href="/pages.php?p=3_3_1_1"; break;
		case 'menu03-4' ://중고거래
		location.href="/pages.php?p=3_4_1_1"; break;


		case 'menu04-1' ://주요실적
		location.href="/bbs/board.php?bo_table=4_1_1_1"; break;
		case 'menu04-2' ://현장앨범
		location.href="/bbs/board.php?bo_table=4_2_1_1"; break;


		case 'menu05-1' : //공지사항
		location.href="/bbs/board.php?bo_table=5_1_1_1"; break;
		case 'menu05-2' : //견적문의
		location.href="/bbs/board.php?bo_table=5_2_1_1"; break;


		case 'menu06-1' ://타워크레인
		location.href="/bbs/board.php?bo_table=6_1_1_1"; break;
			case 'menu06-1-1' :
			location.href="/pages.php?p=6_1_1_1"; break;
			case 'menu06-1-2' :
			location.href="/pages.php?p=6_1_2_1"; break;
			case 'menu06-1-3' :
			location.href="/pages.php?p=6_1_3_1"; break;


		case 'menu06-2' ://건설용리프트
		location.href="/pages.php?p=6_2_1_1"; break;
		case 'menu06-3' ://고소작업대
		location.href="/pages.php?p=6_3_1_1"; break;
		case 'menu06-4' ://하이드로크레인
		location.href="/pages.php?p=6_4_1_1"; break;
		
		}
}

