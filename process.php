<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
	
</head>
<body>
<?php 
require_once './database.php';
	if($username=="admin" && $password=="admin")
	{
		echo "<h1>Login successfully!</h1>";
		echo "User: " . $username . "<br>";
		echo "Pass: " . $password . "<br>";
	}
	else
        echo "<h1> Mày nhập sai mật khẩu hoặc tài khoản rồi thèn ngu</h1>";
?>

</body>
</html>