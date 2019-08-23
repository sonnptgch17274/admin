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
        require_once('database.php');
        if (isset($_POST['btn_submit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $content = $_POST['content'];
        
         try {
               $stmt = $conn->prepare("UPDATE product SET Site_Code=:site, Location_name=:location
        WHERE OBJECTID =:id");
        $stmt->execute(array(':Name' => $name, ':Price' => $price,':Content' => $content));
        if ($stmt) {
        
        
                           header('Location:index.php');
        
                       }
                     } catch (PDOException $e) {
                       echo $e->getMessage();
                    }
        }
        
            $name = '';
            $price = '';
            $content = '';
        
         if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $stmt = $conn->prepare("SELECT * FROM product WHERE id=:id");
                $stmt->execute(array(':id' => $id));
                $row = $stmt->fetch();
                $object_id = $row['id'];
                $name = $row['Name'];
                $price = $row['Price'];
        }
        
        ?>
            <h2>Edit the records</h2>
        
            <form action="" method="post">
                <table border="3px" cellpadding="5px">
        
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name"  value="<?= $name; ?>"></td>
                    </tr>
        
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="price" value="<?= $price; ?>"></td>
                    </tr>
        
                     <tr>
                        <td><input type="hidden" name="txt_id" value="<?= $object_id; ?>"></td>
                        <td><input type="submit" name="btn_submit" value="Submit"></td>
                    </tr>
        
        </table>
        </form>

    ?>
</body>
</html>