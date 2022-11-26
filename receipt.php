<?php
  session_start();
  require 'db.php';
  $bid = $_GET['bid'];

?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>1</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
<style>
body{
  background-color: ;

}
.font{
  font-size: 50px;
  color: red;
}
.heading{
  padding-bottom: 30px;
  font-size: 20px;
}
.fontt{
  font-size: 25px;
  padding-bottom: 30px;
  padding-top: 60px;
}
</style>
</head>

<body>
  <center><h1><b>RECEIPT</b></h1></center>
<table width="100%" border="0">
<?php

          $sql="SELECT * FROM transaction WHERE bid = '$bid'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

          $pid = $row['pid'];
          $sql = "SELECT * FROM fproduct WHERE pid = '$pid'";
          $result = mysqli_query($conn, $sql);
          $frow = mysqli_fetch_assoc($result);

          ?>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			
			<tr>
			  <td colspan="3"  class="font">AGROPRODUCTS SYSTEM </td>
  </tr>
			<tr>
			  <td colspan="2"  class="fontt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <div align="right">Order Date : <?php echo $row['orderdate']?></div></td>
  </tr>
			<tr>
			  <td colspan="2"  class="heading" style="color: blue;">ORDER DETAILS &raquo; </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font1"><table width="100%" border="0">
           <tr>
                  <td width="32%" valign="top" class="heading"><b>Received From :</b> </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['name'];?></span></td>
                    </tr>
                <tr>
                  <td width="32%" valign="top" class="heading"><b>Product Name :</b> </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $frow['product'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading"><b>Price :</b> </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $dr=$frow['price'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading"><b>Quantity Ordered :</b> </td>
                      <td class="comb-value1"><?php echo $fpm=$row['quantity'];?></td>
                    </tr>
                    
                    <tr>
                    <td width="12%" valign="top" class="heading"><b>Total Payment :</b> </td>
                      <td class="comb-value1">
                        Ksh.<?php echo $dr*$fpm;?>.00
                      </td>
                    </tr>


                 </table></td>
                </tr>
               
                  </table>
                  

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Print Receipt " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Close Receipt " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
