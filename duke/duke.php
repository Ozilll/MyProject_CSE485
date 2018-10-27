<?php
	if ($_SERVER['REQUEST_METHOD'] =="POST"){
		$error = array();
		if (empty($_POST['pick'])){
			$error['pick'] = "Bạn cần chọn hình thức nộp đề tài đồ án";
		}else{
			$pick = $_POST['pick'];
		}
		if (empty($error)){
			echo $pick;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>Chọn hình thức bạn quan tâm</h2>
	<form action="" method="POST">
		<label for="">Hình thức chọn đề tài</label><br/>
		<select name="pick">
			<option value="">--Chọn--</option>
			<option <?php if (isset($pick) && $pick == 'think') echo "selected=\"selected\""; ?>value='think'>Tự nghĩ đề tài</option>
			<option <?php if (isset($pick) && $pick == 'join') echo "selected=\"selected\""; ?>value='join'>Tham gia đề tài do các thầy cô lựa chọn</option>
		</select><br/><br/>
		<span style="color: blue;"><?php if (isset($error['pick'])) echo $error['pick']; ?></span><br/>
		<button type = "sumbit" class="btn btn-info btn-lg" name="sm_order" data-toggle="modal" data-target="#pick">tiếp theo</button>
		<div class="modal fade" id="pick" role="dialog">
			<div class="modal-dialog">
			
			</div>
	</div>
	</form>
</body>
</html>