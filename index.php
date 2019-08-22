<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<?php  
		// $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=GWCourses', 'postgres', '');
		// echo "done";

		$db = parse_url(getenv("DATABASE_URL"));
		$pdo = new PDO("pgsql:" . sprintf(
		    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
		    $db["host"],
		    $db["port"],
		    $db["user"],
		    $db["pass"],
		    ltrim($db["path"], "/")
		));
		


		$sql = "SELECT * FROM product";
		$stmt = $pdo->prepare($sql);
		//Thiết lập kiểu dữ liệu trả về
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
				
	?>
	<ul>
		<?php  
			foreach ($resultSet as $row) {
			echo '<li>' .
				$row['name'] . ' --' . $row['price'] . ' --' .$row['content'] 
                . '</li>';
                
			}
		?>
	</ul>

    <?php 

// Lấy dự liệu gửi lên từ client dùng biến toàn cục $_GET hoặc $_POST
// Isset: kiểm tra xem tài khoản có tồn tại không 
if(isset($_POST['user']) && isset($_POST['pass']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	// tạo kết nối tới cơ sở dữ liệu bằng mysql
	// có 2 cách kết nối đến phpmyadmin ( 1. mysqli -> mysql  2. PDO <-> other Ms SQL Server) - phpmyadmin thường dùng 1
	
	// tạo câu truy vấn 
	$sql = "select * from users where username ='" .$user 
		. "' and password='" . $pass . "'";
	// chạy câu truy vấn lấy kết quả 
	

	$rows = query($sql);
	if(count($rows)>0)
		echo "<h1>Login succesfull. Welcome </h1>" . $_POST['user'];

	else
		echo "<h1>Login fail</h1>";


	// if($username=="abc" && $password=="123")
	// {
	// 	echo "<h1>Login successfully!</h1>";
	// 	echo "User: " . $username . "<br>";
	// 	echo "Pass: " . $password . "<br>";
	// }
	// else
	// 	echo "<h1> Mày nhập sai mật khẩu hoặc tài khoản rồi thèn ngu</h1>";
}
else
	echo "<h1>Tài khoản của mày đéo có trên hệ thống,OK!!!</h1>";


    ?>
<!-- <table style="border: 1px solid gray; border-spacing: 20px;">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
	</tr> -->
	<!-- 
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
	 ?> -->
	
</table>

<div><h1>Log in</h1>
			<form action="" method="Post">
				<div class="user">
					<input id=1 type="text" name="username" placeholder="Username" size="50"> <br>
					<input id=1 type="password" name="password" placeholder="Password" size="50"> <br>
					<input type="submit" value="Login">
				</div>
			</form>	
    </div>



</body>
</html>