<?php
  session_start();
  require 'db.php';
  $pid = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Farmer | Check Review</title>
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
<h1 class="mainTitle">Farmer | Check Your Product Reviews</h1>
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
<th>Buyer</th>
<th>City</th>
<th>Mobile No </th>
<th>Email </th>
<th>Pin Code </th>
<th>Address </th>
<th>Order Date</th>
</tr>
</thead>
<tbody>
<?php

          $sql="SELECT * FROM transaction WHERE pid = '$pid'";
          $result = mysqli_query($conn, $sql);
          $cnt=1;
          while($row = mysqli_fetch_assoc($result))
          { 
          ?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['pincode'];?></td>
<td><?php echo $row['addr'];?></td>
<td><?php echo $row['orderdate'];?></td>
</tr>
<?php 
$cnt=$cnt+1;
 }?>
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
