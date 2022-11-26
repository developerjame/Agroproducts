<?php
session_start();
include('include/config.php');
if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from transaction where bid = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farmer | Manage Customers</title>
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
<h1 class="mainTitle">Buyer | View Order</h1>
</div>
</div>
</section>
<div style="border-top: 1px double yellow;" class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<center> 
<table style="border-collapse: collapse;" class="table table-hover" id="sample-table-1">
<thead>
<tr>
<th>Image</th>
<th>Product</th>
<th>Unit Price</th>
<th>Quantity </th>
<th>Total Payment </th>
</tr>
</thead>
<tbody>
<?php
$bid=$_SESSION['id'];
$sql=mysqli_query($con,"select * from transaction where bid='$bid' ");
$row=mysqli_fetch_array($sql);

$pid=$row['pid'];
$sql=mysqli_query($con,"select * from fproduct where pid='$pid' ");
$frow=mysqli_fetch_array($sql);

$picDestination = "images/productImages/".$frow['pimage'];
?>
<tr>
<td class="hidden-xs"><img class="image fit" src="<?php echo $picDestination.'';?>" alt="" width="65" height="65" /></td>
<td><?php echo $frow['product'];?></td>
<td><?php echo $dr=$frow['price'];?></td>
<td><?php echo $fpm=$row['quantity'];?></td>
<td>Ksh.<?php echo $dr*$fpm;?>.00</td>

</tr>
</tbody>
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
