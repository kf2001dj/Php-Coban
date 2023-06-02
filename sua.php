<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
							<button name="sua">Sửa</button>
							<button type="reset">Nhập lại</button>
							<button type="submit"><a href="index.php">Quay về</a></button>
						</th>
					</tr>
				</tbody>
			</table>
		</form>
	</center>
	<?php
	if(isset($_POST['sua'])){
		$msv = $_POST['msv'];
		$ht = $_POST['ht'];
		$qq = $_POST['qq'];
		$em = $_POST['em'];
		$sql = "UPDATE sinhvien SET hoten='$ht',quequan='$qq',email='$em' WHERE masv='$msv'";
		$result = $conn -> query($sql);
		if($result){
			echo "Sửa thành công";
		} else {
			echo "Sửa không thành công";
		}
	}
	$conn -> close();
	?>
</body>
</html>