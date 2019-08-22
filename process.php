<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
	
</head>
<body>
<?php 
require_once './database.php';
// Lấy dự liệu gửi lên từ client dùng biến toàn cục $_GET hoặc $_POST
// Isset: kiểm tra xem tài khoản có tồn tại không 
if(isset($_POST['user']) && isset($_POST['pass']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	// tạo kết nối tới cơ sở dữ liệu bằng mysql
	// có 2 cách kết nối đến phpmyadmin ( 1. mysqli -> mysql  2. PDO <-> other Ms SQL Server) - phpmyadmin thường dùng 1
	
    // tạo câu truy vấn 
    $sql = "SELECT * FROM users where username = '" .$user
    . "' and password='" . $pass . "'";
	// chạy câu truy vấn lấy kết quả 
	

	// $rows = query($sql);
	// if(count($rows)>0)
	// 	echo "<h1>Login succesfull. Welcome </h1>" . $_POST['user'];
	// else
	// 	echo "<h1>Login fail</h1>";


	if($username=="admin" && $password=="admin")
	{
		echo "<h1>Login successfully!</h1>";
		echo "User: " . $username . "<br>";
		echo "Pass: " . $password . "<br>";
	}
	else
		echo "<h1> Mày nhập sai mật khẩu hoặc tài khoản rồi thèn ngu</h1>";
// }
// else
// 	echo "<h1>Tài khoản của mày đéo có trên hệ thống,OK!!!</h1>";


?>


	<?php
	$sql="select*from users";
	$rows=query($sql);
	for($i=0; $i<count($rows); $i++)
	{
	?>
		<tr>
		<td><?=$rows[$i][0]?></td>
		<td><?=$rows[$i][1]?></td>
		<td><?=$rows[$i][2]?></td>
		</tr>
	<?php
	} 
	 ?>
	
</table>
</body>
</html>