<?php
session_start();
include('include/config.php');
require 'db.php';
if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from sale where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farmer | View Your Sales</title>
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
  a{
    
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
<h1 class="mainTitle">Farmer | Sales</h1>
</div>
<div style="padding-left: 85.3%;">
  <a style="display:inline-block;
    background-color: blue;
    padding-top: 20px;
    color: white;
    padding-bottom: 20px;
    padding-left: 11px;
    padding-right: 11px;
    margin-bottom: 10px;
    font-size: 25px;" href="monthly_sales.php">Sales Report</a></div>
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
<th>Product Name</th>
<th>Price</th>
<th>Quantity </th>
<th>Total Price</th>
<th>Sales Time </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$fid=$_SESSION['id'];
$sql=mysqli_query($con,"select * from sale where fid='$fid',created_at > DATE_SUB(NOW(), INTERVAL 1 MONTH) ");
$sql="SELECT * FROM sale WHERE created_at > DATE_SUB(NOW(), INTERVAL 1 MONTH)";
$cnt=1;
while($row=mysql_fetch_array($sql))
{
?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['product'];?></td>
<td>Ksh <?php echo $dr=$row['price'];?></td>
<td><?php echo $fpm=$row['quantity'];?></td>
<td>Ksh <?php echo $dr*$fpm;?>.00</td>
<td><?php echo $row['sales_time'];?></td>
<td>

<a href="">View</a> || <a href="" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove">Delete</a>

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
