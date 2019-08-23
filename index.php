<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ManageProduct</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="trang">
        <?php
        require_once './database.php';
		$sql = "SELECT * FROM product";
		$stmt = $pdo->prepare($sql);
		//Thiết lập kiểu dữ liệu trả về
		$stmt->setFetchMode(PDO::FETCH_BOTH);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
				
    ?>
    <div><a href="Login.php">Log out</a></div>
 
            <table class="table" border="1" cellspacing="0" width="400">
				<tr>
					<th>Name</th>
                    <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .$row['name']. '</td>';
                }
                ?>      
                </tr>
                
				<tr>
					<th>Content</th>
                    <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .$row['content']. '</td>';
                }
                ?>      
                </tr>


				<tr>
					<th>Price</th>
                    <?php
                foreach ($resultSet as $row) {
                    echo '<td>' .$row['price']. '</td>';
                }
                ?>      
                </tr>  
            <button>Add</button>
            <button>Edit</button>
            <button>Delete</button>                  
            </table>
            
            <button>Add</button>
            <button>Edit</button>
            <button>Delete</button>
   


            </div>
</body>
</html>