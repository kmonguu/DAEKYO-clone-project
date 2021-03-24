<style>
	.search_result { border-collapse:collapse; width:1200px; margin:0 auto; table-layout:fixed; text-align:center;}
	.search_result th { height:50px; color:#6c6c6c; font-size:15px; border-top:1px solid #ddd; border-bottom:1px solid #ddd; background:rgba(0,0,0,.05); }
	.search_list td { height:50px; padding:10px 0; border-bottom:1px solid #ddd; }
	.search_list td a { color:#000; }
	.search_list:hover { background:rgba(0,0,0,.05); }
</style>

<?
	$bo_sql = "SELECT * FROM g4_board";
	$bo_result = sql_query($bo_sql);
	$cnt = 0;
?>
<div style="width:1200px; margin:0 auto; padding:20px 0 80px 0;">
	<?
		if ($stx=="")
			echo "<p style='font-size:30px; text-align:center;'>' '에 대한 검색결과가 없습니다.</p>";

		else {
	?>
		<table class="search_result">
			<colgroup>
				<col width="50px;">
				<col width="120px">
				<col>
				<col width="100px;">
				<col width="80px;">
				<col width="50px;">
			</colgroup>

			<tbody>
				<tr>
					<th>번호</th>
					<th>게시판</th>
					<th>제목</th>
					<th>작성자</th>
					<th>작성일</th>
					<th>조회수</th>
				</tr>

				
				<?
					while($bo_arr = sql_fetch_array($bo_result)) {
		//						if($stx=="") break;

						$wr_sql = "SELECT * FROM g4_write_{$bo_arr[bo_table]} WHERE (wr_subject like '%{$stx}%' or wr_content like '%{$stx}%')";
						$wr_result = sql_query($wr_sql);

						$tmp_arr = array();
						while($wr_arr = sql_fetch_array($wr_result))
							array_push($tmp_arr, $wr_arr);

						if(count($tmp_arr) > 0) {

							for($i=0; $i<count($tmp_arr); $i++) {
								echo "<tr class='search_list'>";
								echo "<td>".(++$cnt)."</td>";
								echo "<td>".$bo_arr["bo_subject"]."</td>";
								echo "<td><a href=\"/bbs/board.php?bo_table=".$bo_arr["bo_table"]."&wr_id=".$tmp_arr[$i]["wr_id"]."\" >".$tmp_arr[$i]["wr_subject"]."</a></td>";
								echo "<td>".$tmp_arr[$i]["wr_name"]."</td>";
								echo "<td>".date("Y.m.d",strtotime($tmp_arr[$i]["wr_datetime"]))."</td>";
								echo "<td>".$tmp_arr[$i]["wr_hit"]."</td>";



								echo "</tr>";
							}
						}
					}
				?>
			
			</tbody>
		</table>
	<?}?>
</div>