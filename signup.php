<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $number = $_POST['cnum'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query = "INSERT into reg (fname, lname, gender, cnum, address, email, pass) values('$firstname', '$lname', '$gender', '$number', '$address', '$email', '$password')";
        
        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";

    }
    else
    {
        echo "<script type='text/javascript' alert('Please Enter Necessary')</script>";
    }
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login andd Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <p><a href="frontend.php">Back to Homepage</a></p>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="text" name="cnum" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Email</label>
            <input type="text" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>            
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button<br>
        <a href="">Terms and Agreement </a>and <a href="">Policy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
    
</body>
</html>