<?php
  session_start();
  require 'db.php';
  $pid = $_GET['id'];

?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>AgroProducts</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  <style type="text/css">
  body{

    background-color: #3ba666;
      -moz-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      -webkit-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      -o-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      -ms-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      color: #ffffff;
  }
    .profile-input-field{
      width: 45%;
      border: 1px double black;
      margin-left: 20%;
      height: 130vh;
      padding-left: 10%;
      padding-top: 10px;
    }
    input,textarea{
      border-style: none;
      height: 30px;
      padding-top: 20px;
      padding-right: 150px;
      padding-left: 10px;
      margin-bottom: 20px; 
    }
    label{
      font-size: 20px;
    }
    .form-control{
      font-size: 20px;
    }
  </style>
  </head>
  <?php
  include 'connection.php';
  $sql="SELECT * FROM fproduct WHERE pid = '$pid'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $picDestination = "images/productImages/".$row['pimage'];
  ?>
<body>
  <center><h1>PRODUCT INFORMATION</h1></center>
<div class="profile-input-field">
        <p style="padding-left: 15%;">
          <img class="image fit" src="<?php echo $picDestination.'';?>" alt="" width="350" height="200" />
        </p>
        <h2>Change and Update Product Information</h2>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Product</label><br>
            <input type="text" class="form-control" name="product" style="width:20em;" placeholder="Enter Product Name" value="<?php echo $row['product']; ?>" required />
          </div>
           <div class="form-group">
            <label>Category</label><br>
            <input type="text" class="form-control" name="pcat" style="width:20em;" placeholder="Enter Product Category" value="<?php echo $row['pcat']; ?>" required />
          </div>
           <div class="form-group">
            <label>Information</label><br>
            <textarea class="form-control" name="pinfo" style="width:20em;" placeholder="<?php echo $row['pinfo']; ?>" value="10" required /></textarea>
          </div>
          <div class="form-group">
            <label>Price</label><br>
            <input type="text" class="form-control" name="price" style="width:20em;" required placeholder="Enter Product Price" value="<?php echo $row['price']; ?>"></textarea>
          </div>
          <div class="form-group">
            <label>Quantity</label><br>
            <input type="text" class="form-control" name="quantity" style="width:20em;" required placeholder="Enter Product Quantity" value="<?php echo $row['quantity']; ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="background-color: blue;color: white;height: 9vh;border-radius: 10px;font-size: 20px;margin-top: 10px;" value="Update"><br><br>
             <a href="myproducts.php">Cancel</a>
          </div>
        </form>
      </div>
    </body>
    </html>
      <?php
      if(isset($_POST['submit'])){
        $product = $_POST['product'];
        $pcat = $_POST['pcat'];
        $pinfo = $_POST['pinfo'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
      $query = "UPDATE fproduct SET product = '$product',
                      pcat = '$pcat', pinfo = '$pinfo', price = '$price', quantity = '$quantity'
                      WHERE pid = '$pid'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Updated Successfully.");
            window.location = "myproducts.php";
        </script>
        <?php
             }              
?>