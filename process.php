<!DOCTYPE html>
<html>
<head>
	<title>Get Data</title>
	
</head>
<body>
<?php 
require_once './database.php'; 
function usernameCheck($username) {
    $stmt = $con->prepare("SELECT username FROM users WHERE username = ':name'");
    $stmt->bindParam(':name', $username);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "exists!";
    } else {
        echo "non existant";
    }
}
?>

</body>
</html>