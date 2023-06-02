<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm mới học sinh</title>
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
	?>
	<center>
		<form method="post" action="">
			<table>
				<thead>
					<tr><td colspan="2"><h1>Nhập thông tin sinh viên</h1></td></tr>
				</thead>
				<tbody>
					<tr>
						<td>Mã sinh viên:</td>
						<td><input type="text" name="msv"></td>
					</tr>
					<tr>
						<td>Họ Tên:</td>
						<td><input type="text" name="ht"></td>
					</tr>
					<tr>
						<td>Quê Quán:</td>
						<td><input type="text" name="qq"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="em"></td>
					</tr>
					<tr>
						<th colspan="2">
							<button name="them">Thêm</button>
							<button type="reset">Nhập lại</button>
							<button type="submit"><a href="index.php">Quay về</a></button>
						</th>
					</tr>
				</tbody>
			</table>
		</form>
	</center>
	<?php
	if(isset($_POST['them'])){
		$msv = $_POST['msv'];
		$ht = $_POST['ht'];
		$qq = $_POST['qq'];
		$em = $_POST['em'];
		$sql = "INSERT INTO sinhvien VALUES ('$msv', '$ht', '$qq', '$em')";
		$result = $conn -> query($sql);
		if($result){
			echo "Thêm thành công";
		} else{
			echo "Thêm không thành công";
		}
	}
	$conn -> close();
	?>
</body>
</html>