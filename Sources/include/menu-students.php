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
					<li> <a href="#myproject">Đồ án của tôi</a> <hr></li>
					<li> <a href="#update-project">Nộp đồ án</a> <hr></li>
					<li> <a href="#information-lecturers">Thông tin giảng viên</a> <hr></li>
					<li> <a href="#all-projects">Tổng hợp đồ án của sinh viên</a> </li>
				</ol>
			</div>
		</div>
	</div>
		<div class="span8">
			<div id="content">
				<div id="report" class="tab_content">
					<?php include("include/note.php"); ?>	
				</div>
				<div id="myproject" class="tab_content">
					<?php if (!$_SESSION['project']) {
						include("include/signup-project.php");
					}else{
						include("include/myproject.php");
					} ?>
				</div>
				<div id="update-project" class="tab_content">
					<?php if (!$_SESSION['project']) {
						include("include/signup-project.php");
					}else{
						include("include/upload-file.php");
					} ?>
				</div>
				<div id="information-lecturers" class="tab_content">
					<?php include("include/information-lecturers.php"); ?>
				</div>
				<div id="all-projects" class="tab_content">
					<?php include("include/all-project.php"); ?>
				</div>
			</div>
			
		</div>	
	</div>
</div>

<script type="text/javascript">
	$('#first').change(function() {
    var value = $(this).val();

    $('#second').children('option').each(function() {
        if ( $(this).val() <= value ) {
            $(this).attr('disabled',true);
        } else {
            $(this).attr('disabled',false)
        }
    });

    $('#second').val(parseInt(value)+1);
});
</script>

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