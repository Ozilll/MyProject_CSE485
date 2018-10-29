<?php $sql = "SELECT join_project.deadline, lecturers.username,topic, students.username_student, projects.content, join_project.score FROM join_project, lecturers, projects, students WHERE lecturers.id = join_project.id_lecturer AND students.id_student = join_project.id_student AND projects.id = join_project.id_project AND lecturers.email = '".$_SESSION['email']."'";
	$result = query($sql);
	confirm($result);
 ?>

<div class="container">
	<div class="text-right">
		<h3>Quản lý đồ án của sinh viên</h3>
	</div>
	<br>
	<?php while($row = fetch_array($result)): ?>
	<ul>
		<li><b>Đề tài:</b> <?php echo $row['topic']; ?></li>
		<li><b>Sinh viên thực hiện:</b> <?php echo $row['username_student']; ?></li>
		<li><b>Khái quát nội dung đề tài:</b> <?php echo $row['content']; ?></li>
		<li><b>Nhận xét đánh giá:</b> </li>
		<li><b>Thời hạn nộp:</b> <?php echo $row['deadline']; ?></li>
	</ul>
	<hr>
	<?php endwhile; ?>
</div>