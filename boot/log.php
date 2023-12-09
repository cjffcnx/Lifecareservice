<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
body
{
margin: 0;
padding: 0;
background-color:#D071F9;
}

.center
{
    background-color:white;
 position:absolute;
 top:50%;
 left:50%;
transform: translate(-50%,-50%);
width:400px;
border-radius:5px;

}

.center h1{
    text-align:center;
    padding-bottom: 20px;
    border-bottom:1px solid silver;
    padding-bottom:20px;
    border-bottom:1px solid silver;
    
}

.form
{
    padding-bottom: 15px;
    margin:0 20px;
    text-align: center;
}
.textfiled{
    width:100%;
    height:50px;
    

}

.form
{
    padding-bottom:15px;
    margin:0 20px;
text-align:center;
}
.textfiled{
    width:100%;
    height:50px;
    font-size:18px;
    padding-left: 10px;
    margin:7px 0;
}

.btn
{
    width:100%;
    height:50px;
    background-color:#D071F9;
    border-radius:5px;
    font-size:20px;
    margin: 7px 0;
    color:white;
    border:0;
    cursor:pointer;
}

.btn:hover{
    background-color:#0363D8;
}

.forgetpass
{
font-size:16px;
padding:4px 0;
margin:3px;

}

.link
{
    text-decoration:none;
    color:#0a63d8;
}

@media (max-width: 470px)
{
    .center{
        width:88%;
    }
}
    </style>
</head>
<body>
    <div class="center">
<h1>Login</h1>
<form action="#" method="POST" autocomplete="off">
<div class="form">
    <input type="text" name="username" class="textfiled" placeholder="Username">
    <input type="password" name="password" class="textfiled" placeholder="Password">
    
   <input type="submit" name="login" value="Login" class="btn"> 
   <div  class="forgetpass"> <a href="#" onclick="alert('Please contact our team members from the about us section')"  rel="noopener noreferrer "class='link'>Forgot Password?</a></div>
  
   
</div>
    </div>
</form>
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
   $pwd= $_POST['password'];

   $query="SELECT * FROM adminlogin WHERE email = '$username' && password='$pwd'";
 $data= mysqli_query($conn,$query);

$total= mysqli_num_rows($data);
// echo $total;
if($total == 1)
{
  $_SESSION['user_name'] = $username;
header('location:display.php');
}
else{
    echo "login failed!";
}
}
?>