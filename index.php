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
        require_once './database.php';
		$sql = "SELECT * FROM product";
		$stmt = $pdo->prepare($sql);
		//Thiết lập kiểu dữ liệu trả về
		$stmt->setFetchMode(PDO::FETCH_BOTH);
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
   
    




</body>
</html>