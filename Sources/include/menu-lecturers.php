<script type="text/javascript">
            $(function() {
                $("#tabs").simpleTab();
            });
        </script>

<hr>
<div class="row-fluid">
<div class="row">
	<div class="menu-column-homepage">
		<div class="span3" style="margin: 0; padding: 0;margin-top: 50px;">
			<div id="tabs">
				<div style="text-align: center; font-size: 17px; font-weight: bold;margin-bottom: 10px; ">Danh mục chính</div>
				<ol class="property-list-homepage">
					<li> <a href="#report">Thông tin đáng chú ý</a> <hr></li>
					<li> <a href="#all-projects">Tổng hợp đồ án của sinh viên</a> </li>
				</ol>
			</div>
		</div>
	</div>
		<div class="span8">
			<div id="content">
				<div id="report" class="tab_content">
					<div class="text-right">BẢNG TIN</div>
					<div class="contents-right">
						<div class="note-important">
							<p>THÔNG TIN ĐÁNG CHÚ Ý</p>
						</div>
					</div>	
				</div>
				<div id="all-projects" class="tab_content">
					<div class="homepage-projects">
						<h4> TỔNG HỢP ĐỒ ÁN CỦA SINH VIÊN ĐÃ HOÀN THÀNH</h4>
					</div>
					<hr>
					<input id="myInput" type="text" placeholder="Tìm kiếm..." style="margin-top: 20px;">
					<hr>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Đề tài</th>
								<th>Sinh viên</th>
								<th>Nội dung</th>
								<th>Đánh giá</th>
							</tr>
						</thead>
						<tbody id="myTable">
							<tr>
								<td>Quản lý đồ án tốt nghiệp</td>
								<td>Trương Minh Đức</td>
								<td>...</td>
								<td>...</td>
							</tr>
							<tr>
								<td>Arsenal</td>
								<td>Ozil</td>
								<td>...</td>
								<td>...</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
		</div>	
	</div>
</div>