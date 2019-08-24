<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank you</title>
  </head>
<body>
    <h1>Thank you for registering the course</h1>
    <?php
    include "database.php";
        $id = $_POST["txtID"]
        $name = $_POST["txtName"];
        $price = $_POST["txtPrice"];
        $content = $_POST["txtContent"]

        $stsm = $pdo->prepare("INSERT INTO product(id, name, 
        price, content) VALUES (?,?,?,?)");
        $stsm->bind_param("ssss", $id, $name, $price, $content);
        $stsm->execute();
        $stsm->close();

    ?>




</body>
</html>