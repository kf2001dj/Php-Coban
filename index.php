<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Danh sách học sinh</title>
	<style type="text/css">
		body{
			background-color: blueviolet;
		}
	</style>
</head>
<body>
	<?php
	$conn = mysqli_connect('localhost','root','','qlsv');
	mysqli_set_charset($conn,"utf8");
	$sql = "SELECT * FROM sinhvien";
	$result = $conn -> query($sql);
	?>
	<center>
		<form method="post" action="">
			<table border="1px">
				<thead>
					<tr>
						<td colspan="6"><h1>Danh sách học sinh</h1></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Mã sinh viên</th>
						<th>Họ tên</th>
						<th>Quê quán</th>
						<th>Email</th>
						<th colspan="2">Edit</th>
					</tr>
					<?php
					while ($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row["masv"] ?></td>
						<td><?php echo $row["hoten"] ?></td>
						<td><?php echo $row["quequan"] ?></td>
						<td><?php echo $row["email"] ?></td>
						<td><button><a href="sua.php">Sửa</a></button></td>
						<td><button><a href="xoa.php">Xóa</a></button></td>
					</tr>
					<?php
				    } $conn -> close();
					?>
					<tr>
						<td colspan="6" align="center">
							<button><a href="them.php">Thêm</a></button>
							<button><a href="index.php">Làm mới</button>	
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</center>
</body>
</html>