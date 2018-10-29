<?php $sql = "SELECT topic, students.username_student, projects.content FROM join_project, lecturers, projects, students WHERE lecturers.id = join_project.id_lecturer AND students.id_student = join_project.id_student AND projects.id = join_project.id_project";
	$result = query($sql);
	confirm($result);
 ?>

<div class="homepage-projects">
	<h4> TỔNG HỢP ĐỒ ÁN CỦA SINH VIÊN ĐÃ HOÀN THÀNH</h4>
</div>
<input id="myInput" type="text" placeholder="Tìm kiếm..." style="margin-top: 20px;">
<hr>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Đề tài</th>
			<th>Tài khoản</th>
			<th>Nội dung</th>
			<th>Đánh giá</th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php while($row = fetch_array($result)): ?>
		<tr>
			<td><?php echo $row['topic']; ?></td>
			<td><?php echo $row['username_student']; ?></td>
			<td><?php echo $row['content']; ?></td>
			<td>...</td>
		</tr>
		<?php endwhile; ?>	
	</tbody>
</table>	