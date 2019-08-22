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

    <div><h1>Log in</h1>
			<form action="process.php" method="Post">
				<div class="user">
					<input id="user1" type="text" name="username" placeholder="Username" size="50"> <br>
					<input id="user1" type="password" name="password" placeholder="Password" size="50"> <br>
					<input type="submit" value="Login">
				</div>
			</form>	
    </div>



</body>
</html>