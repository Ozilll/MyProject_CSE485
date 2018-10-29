<?php $sql = "SELECT join_project.deadline, lecturers.username,topic, students.username_student, projects.content, join_project.score FROM join_project, lecturers, projects, students WHERE lecturers.id = join_project.id_lecturer AND students.id_student = join_project.id_student AND projects.id = join_project.id_project AND students.email = '".$_SESSION['email']."'";
	$result = query($sql);
	confirm($result);
 ?>

<div class="container">
	<div class="text-right">
		<h3>Thông tin đồ án</h3>
	</div>
	<br>
	<?php while($row = fetch_array($result)): ?>
	<ul>
		<li>Đề tài: <?php echo $row['topic']; ?></li>
		<li>Giảng viên hướng dẫn: <?php echo $row['username']; ?></li>
		<li>Khái quát nội dung đề tài: <?php echo $row['content']; ?></li>
		<li>Nhận xét đánh giá: </li>
		<li>Thời hạn nộp: <?php echo $row['deadline']; ?></li>
	</ul>
	<?php endwhile; ?>	
</div>