<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
	
</head>
<body>
<?php 
require_once './database.php'; 

    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();

    if($stmt->rowCount() > 0){
        echo "exists!";
    } else {
        echo "non existant";
    }
}
?>

</body>
</html>