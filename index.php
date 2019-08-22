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
					<th>Name
                    <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .$row['name']. '</td>';
                }
                ?>   
                    </th>
					<th>Price
                    <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .$row['price']. '</td>';
                }
                ?> 
                    </th>
					<th>Content
                    <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .$row['content']. '</td>';
                }
                ?> 
                    </th>
                </tr>                            
			</table>
   



</body>
</html>