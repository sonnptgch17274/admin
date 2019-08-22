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
 
            <table border="1" cellspacing="0">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Content</th>
                </tr>
                
				<tr>
                <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .
                    $row['name']. '</td>';
                }
                ?>                
                </tr>
                
                <tr>
                <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .
                    $row['price']. '</td>';
                }
                ?>                
                </tr>
                
                <tr class="id2">
                <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .
                    $row['content']. '</td>';
                }
                ?>                
				</tr>
            
			</table>
   



</body>
</html>