<!DOCTYPE html>
<html lang="en">
<head>
<title>Add product</title>
  </head>
<body>
    <h1>Add product information</h1>
    <form action="Add.php" method="post">
        <table width="50%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="num" name ="txtId"></td>
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


</body>
</html>