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
	<form method="post" action="">
		<table>
			<tr>
				<td>Nhập mã sinh viên:</td>
				<td><input type="text" name='msv'></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="xoa" value="Xóa">
					<button type="submit"><a href="index.php">Quay về</a></button>
				</td>
			</tr>
		</table>
	</form>
	<?php
	$conn = mysqli_connect('localhost','root','','qlsv');
	mysqli_set_charset($conn,"utf8");
	if (isset($_POST['xoa'])) {
		$msv = $_POST['msv'];
		$sql = "DELETE FROM sinhvien WHERE masv='$msv'";
		$result = $conn -> query($sql);
		if($result){
		echo "Xóa thành công";
	    } else {
	    	echo "Xóa không thành công";
	    }
	}
	$conn -> close();
	?>
</body>
</html>