<!DOCTYPE html>
<html lang="en">
<head>
<title>Add product</title>
  </head>
<body>
    <h1>Add product information</h1>
    <form action="product_editing.php" method="post">
        <table width="50%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name ="txtId"></td>
            </tr>

            <tr>
                <td>Name</td>
                <td><input type="text" name ="txtName"></td>
            </tr>

            <tr>
                <td>Price</td>
                <td><input type="text" name ="txtPrice"></td>
            </tr>

            <tr>
                <td>Content</td>
                <td><input type="text" name ="txtContent"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Register"></td>
            </tr>

        </table>
    </form>

    <?php
    include "database.php";
    if(isset($_POST['Register'])){
        $id = $_POST["txtId"]
        $name = $_POST["txtName"];
        $price = $_POST["txtPrice"];
        $content = $_POST["txtContent"]

        $stsm = $pdo->prepare("INSERT INTO product(id, name, 
        price, content) VALUES (?,?,?,?)");
        $stsm->bind_param("ssss", $id, $name, $price, $content);
        $stsm->execute();
        $stsm->close();  
    }


    ?>


</body>
</html>