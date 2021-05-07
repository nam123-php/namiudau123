<?php
    include ('productCRUD.php');
    if(isset($_POST['Add'])){
        $obj = new ProductCRUD();
        $success = $obj -> createProduct ($_POST['code'],$_POST['name'],$_POST['price'],
                                          $_POST['images'],$_POST['details']);
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Add new product</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div class="form-group">
      <label for="code">code:</label>
      <input type="code" class="form-control" id="code" placeholder="Enter code" name="code">
    </div>
    <div class="form-group">
      <label for="name">name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="price">price:</label>
      <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <div class="form-group">
      <label for="images">images:</label>
      <input type="images" class="form-control" id="images" placeholder="Enter images" name="images">
    </div>
    <div class="form-group">
      <label for="details">details:</label>
      <input type="details" class="form-control" id="details" placeholder="Enter details" name="details">
    </div>
    <button type="submit" class="btn btn-primary" name = "Add">Add new</button>
  </form>
</div>
</body>
</html>