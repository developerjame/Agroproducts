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
      height: 120vh;
      padding-left: 10%;
      padding-top: 10px;
    }
    input{
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
  session_start();
$fid=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM farmer where fid='$fid'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
<body>
  <center><h1>USER PROFILE</h1></center>
<div class="profile-input-field">
        <p style="padding-left: 33%;">
          <img src="images/profileImages/profile0.png" width="100" height="100">
        </p>
        <h2>Change and Update Your Information</h2>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label><br>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['fname']; ?>" required />
          </div>
           <div class="form-group">
            <label>Email</label><br>
            <input type="text" class="form-control" name="femail" style="width:20em;" placeholder="Enter your Email" value="<?php echo $row['femail']; ?>" required />
          </div>
           <div class="form-group">
            <label>Mobile Number</label><br>
            <input type="text" class="form-control" name="fmobile" style="width:20em;" placeholder="Enter your Mobile Number" value="<?php echo $row['fmobile']; ?>" required />
          </div>
          <div class="form-group">
            <label>Address</label><br>
            <input type="text" class="form-control" name="faddress" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['faddress']; ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="background-color: blue;color: white;height: 9vh;border-radius: 10px;font-size: 20px;margin-top: 10px;" value="Update"><br><br>
             <a href="profileView.php">Cancel</a>
          </div>
        </form>
      </div>
    </body>
    </html>
      <?php
      if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $femail = $_POST['femail'];
        $fmobile = $_POST['fmobile'];
        $faddress = $_POST['faddress'];
      $query = "UPDATE farmer SET fname = '$fname',
                      femail = '$femail', fmobile = '$fmobile', faddress = '$faddress'
                      WHERE fid = '$fid'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Updated Successfully.");
            window.location = "logout.php";
        </script>
        <?php
             }              
?>