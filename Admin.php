<?php
include ('productCRUD.php');
$obj = new ProductCRUD();
$list = $obj -> readProducts();
if ($list) {
    /*foreach($list as $item) {
        $content = "";
        foreach($item as $key => $value) {
            $content = $content . $key . ": ". $value . "<br>";
        }
        echo $content . "<br>";
    }
}*/
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class ="container">
            <h3><a href="insert.php">Add new</a></h3>
            <table class = "table table-bordered">
                <tr>
                    <th>product ID</th>
                    <th>product Name</th>
                    <th>product price</th>
                    <th>product Image</th>
                    <th>product Details</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($list as $item) { ?>
                <tr>
                    <td><?php echo $item["code"] ?> </td>
                    <td><?php echo $item["name"] ?> </td>
                    <td><?php echo $item["price"] ?> </td>
                    <td><img src = "img\<?=$item['images']?>" width="144" height="142" /></td>
                    <td><?php echo $item["details"] ?> </td>
                    <td><a href="delete.php?code=<?=$item["code"]?>" onclick="return confirm('Are you sure you want to delete?');">
                    <button type="button" class="btn btn-danger">Delete</button></a>
                    <a href="delete.php?code=<?=$item["code"]?>" > <button type="button" class="btn btn-success">Insert</button></a>
                     </td>
                </tr>
                <?php } ?>
                <?php } ?>
            </table>
        </div>
    </body>
</html>