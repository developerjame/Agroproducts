<?php
session_start();
include('include/config.php');
require 'db.php';
if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from fproduct where pid = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farmer | Manage Products</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

  </head>
  <style>
  body{
    background-color: #3ba666;
      -moz-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      -webkit-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      -o-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      -ms-background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
      background-image: linear-gradient(60deg, #4dac71 50%, #3ba666 50%);
  }
  th,td{
    width: 200px;
  }
  th{
    border-bottom: 2px solid black;
    padding-bottom: 20px;
    padding-top: 40px;
    font-size: 20px;
    background-color: #35E140;
  }
  td{
    text-align: center;
    padding-top: 30px;
    padding-bottom: 10px;
    border-bottom: 1px solid blue;
  }
  h1{
    font-size: 35px;
    margin-left: 85px;
  }
  table{
    background-color: cyan;
  }
  a{
    text-decoration: none;
  }
</style>
  <body>
    <div id="app">    
<div class="app-content">
<div class="main-content" >
<div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Farmer | Manage Products</h1>
</div>
</div>
<div style="margin-bottom: 20px;">
<a style="margin-left: 85%; background-color: cyan;padding: 20px;border-radius: 20px;color: black;font-size: 30px;" href="market.php">Cancel</a>
</div>
</section>
<div style="border-top: 1px double yellow;" class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<center> 
<table style="border-collapse: collapse;" class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th class="center">#</th>
<th>Image</th>
<th>Product</th>
<th>Category</th>
<th>Features </th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Customers</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$fid=$_SESSION['id'];
$sql=mysqli_query($con,"select * from fproduct where fid='$fid' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<?php
 $picDestination = "images/productImages/".$row['pimage'];

?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td><img class="image fit" src="<?php echo $picDestination.'';?>" alt="" width="65" height="65" /></td>
<td class="hidden-xs"><?php echo $row['product'];?></td>
<td><?php echo $row['pcat'];?></td>
<td><?php echo $row['pinfo'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><a href="product_customers.php?id=<?php echo $row['pid']?>">view</a></td>

<td>

<a href="editproduct.php?id=<?php echo $row['pid']?>">Edit</a> ||<a href="checkreview.php?id=<?php echo $row['pid']?>">Reviews</a> || <a href="myproducts.php?id=<?php echo $row['pid']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove">Delete</a>


</td>
</tr>
<?php 
$cnt=$cnt+1;
 }?></tbody>
</table>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  </body>
</html>
