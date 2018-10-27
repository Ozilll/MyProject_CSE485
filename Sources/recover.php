<?php include("include/header.php") ?>
<div class="background-color">
	<div class="container">
		<div class="row-fluid">
			<div class="text-center"><h2 style="font-family: Arial"><b>KHÔI PHỤC MẬT KHẨU</b></h2></div>
			<form method="post" class="text-center">
				<div class="form-group">
					<?php recover_password(); ?>
					<p><b>Nhập email của bạn</b></p>
	            	<input type="email" class="form-control" name="email_student" placeholder="Email">
	          	</div>
				<dir class="row">
					<div class="form-group" style="margin-left: 150px">
						<div class="span6">
							<button type="submit" class="btn btn-primary" name="cancel-submit">Hủy bỏ</button>
						</div>
						<div class="span3">
							<button type="submit" class="btn btn-primary" name="recover-submit">Gửi mật khẩu tới email</button>
						</div>
					</div>
				</dir>
				<input type="hidden" class="hide" name="token" id="token" value="<?php echo token_generator(); ?>">
			</form>
		</div>
	</div>
</div>