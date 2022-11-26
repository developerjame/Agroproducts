<?php
session_start();
include('include/config.php');
if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from sale where id = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farmer | Daily Report</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="login.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="css/skel.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-xlarge.css" />

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
<h1 class="mainTitle">Farmer | Daily Report</h1>
</div>
<div class="12u$">
                            <center>
                                <div class="row uniform">
                                    <div class="4u 12u$(large)">
                                        <a href="sales_report.php" class="btn btn-danger" style="text-decoration: none;">Monthly Report</a> 
                                    </div>
                                    <div class="4u 12u$(large)">
                                        <a href="daily_report.php" class="btn btn-danger" style="text-decoration: none;">Daily Report</a>
                                    </div>
                                    <div class="4u 12u$(large)">
                                        <a href="sales_by_date.php" class="btn btn-danger" style="text-decoration: none;">Sales By Date Report</a>
                                    </div>
                                </div>
                            </center>
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
$sql=mysqli_query($con,"select * from sale where fid='$fid' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
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
