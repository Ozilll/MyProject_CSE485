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
					<li> <a href="#student-management">Quản lý đồ án sinh viên</a> <hr></li>
					<li> <a href="#offer-project">Đề xuất đồ án</a> <hr></li>
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
				<div id="student-management" class="tab_content">
					<?php include("include/student-projects-management.php"); ?>
				</div>
				<div id="offer-project" class="tab_content">
					<?php include("include/proposal.php"); ?>
				</div>
				<div id="all-projects" class="tab_content">
					<?php include("include/all-project.php") ?>
				</div>
			</div>
			
		</div>	
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>