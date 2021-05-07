<?php
    include('productCRUD.php');
    $obj = new ProductCRUD();
    $success = $obj->deleteProduct($_GET['code']);
    header('Location: index.php');
?>