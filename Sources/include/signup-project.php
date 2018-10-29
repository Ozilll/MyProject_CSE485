<div class='containter'>
<h3 class='text-center'>Bạn chưa có đồ án nào, mời nhấn phím 'tiếp theo'</h3>
<button type = 'button' class='btn btn-info btn-lg' name='sm_order' data-toggle='modal' data-target='#myModal'>tiếp theo</button>
<div class='modal fade' id='myModal' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>&times;</button>
				<h4 class='mdoal-title'>Đăng ký làm đồ án</h4>
			</div>
			<div class='modal-body'>
				<h3>Chọn đề tài:</h3>
				<form method="POST">
					<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
								echo "<pre>";
								print_r($_POST);
								echo "</pre>";
								die;
							} ?>
					<input type="checkbox" name="project[]" value="1" id="project_1">
					<label for="project_1">Quản lý sinh viên</label><br>
					<input type="checkbox" name="project[]" value="2" id="project_2">
					<label for="project_2">Quản lý thư viện</label><br>
					<input type="checkbox" name="project[]" value="3" id="project_3">
					<label for="project_3">Du lịch thông minh</label><br>
					<input type="checkbox" name="project[]" value="4" id="project_4">
					<label for="project_4">Quản lý đồ án</label><br>
					<div class='modal-footer'>
						<button type='submit' class='btn btn-default' data-dismiss='modal'>Đăng ký</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>
</div>