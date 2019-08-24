<?php
    include "database.php";
        $id = $_POST["txtId"];
        $name = $_POST["txtName"];
        $price = $_POST["txtPrice"];
        $content = $_POST["txtContent"];

        $stsm = $pdo->prepare("INSERT INTO product(id, name, 
        price, content) VALUES (?,?,?,?)");
        $stsm->bind_param("ssss", $id, $name, $price, $content);
        $stsm->execute();
        $stsm->close();  



    ?>