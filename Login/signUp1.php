<?php
// Include config file
require_once "../config1.php";
 
// Define variables and initialize with empty values
$name = $mobile = $email = $uname = $pass = $address = $confirm_password = "";
$name_err = $mobile_err = $email_err = $uname_err = $pass_err = $address_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter Name.";     
    } else{
        $name = trim($_POST["name"]);
    }
     // Validate mobile
    if(empty(trim($_POST["mobile"]))){
        $mobile_err = "Please enter Phone No.";     
    } else{
        $mobile = trim($_POST["mobile"]);
    }
     // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter Email.";     
    } else{
        $email = trim($_POST["email"]);
    }
     // Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter Address.";     
    } else{
        $address = trim($_POST["address"]);
    }
 
    // Validate username
    if(empty(trim($_POST["uname"]))){
        $uname_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM buyer WHERE uname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_uname);
            
            // Set parameters
            $param_uname = trim($_POST["uname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $uname_err = "This username is already taken.";
                } else{
                    $uname = trim($_POST["uname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["pass"]))){
        $pass_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["pass"])) < 6){
        $pass_err = "Password must have atleast 6 characters.";
    } else{
        $pass = trim($_POST["pass"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($pass_err) && ($pass != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($mobile_err) && empty($email_err) && empty($uname_err) && empty($pass_err) && empty($address_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO buyer (name, mobile, email, uname, pass, address) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sissss", $param_name, $param_mobile, $param_email, $param_uname, $param_pass, $param_address);
            
            // Set parameters
            $param_name = $name;
            $param_mobile = $mobile;
            $param_email = $email;
            $param_uname = $uname;
            $param_pass = password_hash($pass, PASSWORD_DEFAULT); // Creates a password hash
            $param_address = $address;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: profile1.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
