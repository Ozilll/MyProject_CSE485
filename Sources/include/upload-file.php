<?php
if (isset($_POST['btn-upload'])) {
		$file = rand(100,100000)."-".$_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_type = $_FILES['file']['type'];
		$folder = "uploads/";
		$new_size = $file_size/2024;
		$new_file_name = strtolower($file);
		$final_file=str_replace('','-',$new_file_name);
		if (move_uploaded_file($file_loc, $folder.$final_file)) {
			$sql = "insert into projects(file_upload, type, size) values('$final_file', '$file_type', '$new_file_name')";
			$result = query($sql);
			confirm($result);
?>
<script type="text/javascript">
	alert("Successfully uploaded");
	window.location.href='page-students-index.php?success';
</script>
<?php
		}else{
			?>
			<script type="text/javascript">
				window.location.href='page-students-index.php?fail';
			</script>
			<?php
		}
	} 
?>

<div class="container">
	<div class="text-right">
		<h3>Nộp tài nguyên liên quan đến đồ án</h3>
	</div>
	<div style="color: red;"><b>Lưu ý: nén lại thành file zip trước khi nộp</b></div>
	<br>
	<form method="post">
		<input type="file" name="file">
		<button type="submit" name="btn-upload">Upload</button>
	</form>
	<?php if (isset($_GET['success'])) { ?>
	<label>Uploaded sucessfully!</label>
	<?php	
	}elseif(isset($_GET['fail'])){ ?>
	<label>Xảy ra lỗi!</label>
	<?php
	} 
	?>
</div>
