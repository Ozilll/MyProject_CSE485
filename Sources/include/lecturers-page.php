<div class="container">
	<div class="information-users">
		<div class="row-fluid">
			<div class="row">
				<div class="span5">
					<div class="information-text">
						<h4>THÔNG TIN NGƯỜI DÙNG:</h4>
					</div>
				</div>
				<?php logged_in();?>
				<div class="span5">
					<p>Email: <?php echo $_SESSION['email']; ?></p>
					<p>Tài khoản: <?php echo $_SESSION['username']; ?></p>
					<p>Tên: <?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>