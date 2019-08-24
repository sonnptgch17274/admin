<?php
    include "database.php";
        // $id = $_POST["txtId"];
        $name = $_POST["txtName"];
        $price = $_POST["txtPrice"];
        $content = $_POST["txtContent"];

        $stsm = $pdo->prepare("INSERT INTO product(name, 
        price, content) VALUES (?,?,?)");
        $stsm->bind_param("sss", $name, $price, $content);
        $stsm->execute();
        $stsm->close();  



    ?>