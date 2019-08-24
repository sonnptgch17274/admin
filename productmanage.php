<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Product</title>
    <link rel="stylesheet" href="productmanage.css">
</head>
<body>
    <div class="trang">
    <div class="dau">
        <h1>Xin chao</h1>
    </div>
    <div class="than">
        <div class="main-content">
        <h1>Danh sách sản phẩm</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./product_editing.php">Thêm sản phẩm</a>
            </div>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-name">Name</div>
                    <div class="product-prop product-name">Price</div>
                    <div class="product-prop product-name">Content</div>
                    <div class="product-prop product-button">Delete</div>
                    <div class="product-prop product-button">Edit</div>
                    <div class="product-prop product-button">Copy</div>
                    <div class="clear-both"></div>
                </li>
                <?php  
                require_once './database.php';
                    foreach ($resultSet as $row) {
                        ?>
                        <div class="product-prop product-name"><?= $row['productname'] ?></div>
                        <div class="product-prop product-name"><?= $row['price'] ?></div>
                        <div class="product-prop product-name"><?= $row['content'] ?></div>
                        <div class="product-prop product-button">
                            <a href="./product_delete.php?id=<?= $row['id'] ?>">Delete</a>
                        </div>

                        <div class="product-prop product-button">
                            <a href="./editing.php?id=<?= $row['id'] ?>">Edit</a>
                        </div>

                        <div class="product-prop product-button">
                            <a href="./product_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
                        </div>
                        <div class="clear-both"></div>  
                    <?php } ?>
            </ul>
        </div>
    </div>
</body>
</html>