<?php include("include/header.php") ?>
<div class="container">
	<div class="row-fluid">
		<div class="text-center"><h2><b>KHÔI PHỤC TÀI KHOẢN</b></h2></div>
		<form method="post">
			<?php recover_password(); ?>
			<div class="form-group">
				<p><b>Nhập mã code của bạn</b></p>
            	<input type="text" class="form-control" name="" placeholder="**************">
          	</div>
			<dir class="row">
				<div class="form-group">
					<div class="span2">
						<button type="submit" class="btn btn-primary" name="cancel-submit">Hủy bỏ</button>
					</div>
					<div class="sapn2">
						<button type="submit" class="btn btn-primary" name="recover-submit">Tiếp tục</button>
					</div>
				</div>
			</dir>
		</form>
	</div>
</div>