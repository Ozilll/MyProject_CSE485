<div class="container">
	<div class="information-users">
		<div class="row-fluid">
			<div class="row">
				<div class="span5">
					<div class="information-text">
						<h4>THÔNG TIN NGƯỜI DÙNG:</h4>
					</div>
				</div>
				<div class="span5">
					<p>
						<?php
							if (logged_in()) {
							}else{
								redirect(index.php);
							}
					 	?>
					</p>
					<p>Họ tên: <?php echo $_SESSION['email_student'];?>
					</p>
					<p>Lớp: 58HT</p>
					<p>Mã sinh viên: 1651160957</p>
				</div>
			</div>
		</div>
	</div>
</div>