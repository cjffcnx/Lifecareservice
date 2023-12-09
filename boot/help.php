<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    $server="localhost";
    $username="root";
    $password="";
    // Make a connection variable now say con
    $conn=mysqli_connect($server, $username,$password);
    
    // To check if the connection succeeded or not
    if(!$conn)
    {
        die("Connection to this database failed due to" .mysqli_connect_error());
    }else{
        echo "<script>alert('Your form has been submitted successfully')</script>";
    }
// Make variable
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $pwd=$_POST['password'];
   $cpwd=$_POST['conpassword'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];

   // Make sql query and for form validation after all the data are entered then only run the sql query
if($fname!=""&& $lname!=""&& $pwd!="" && $cpwd!="" && $gender!="" && $email!="" && $phone!="" && $address!="")
{

   $sql="INSERT INTO `mentalc`.`form` (`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`) VALUES ('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address')";

   // To insert into the database
if($conn->query($sql)==true){
    // echo "Successfully inserted";
}else
{
    echo "ERROR: $sql <br> $conn->error";
}
}else{
    echo"<script>alert('Fill the form completely first');</script>";
}

// Close the connection after the job is done
$conn->close();


// Finally use the function ifset on the top after inserting html
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental counselling form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
     /* background: 
      url(bgimg.png); */
       background-image: linear-gradient(to right, rgba(211, 19, 221, 0), rgb(119, 0, 255));
      background-repeat: no repeat;
      padding:0 10px;
        }
        .container
        {
            border:2px solid black;
            max-width:500px;
            width:100%;
            background-color:white;
            margin:20px auto;
            padding:30px;
            box-shadow:5px 1px 2px rgba(0,0,0,0.5)
        }

        .container .title
        {
           font-size:24px; 
           font-weight:600;
           margin-bottom:25px;
           color: #D071F9;
           text-transform: uppercase;
           text-align:center;
        }

.container .form
{
    width:100%;

}

.container .form .input-field
{
    margin-bottom:15px;
    display:flex;
    align-items:center;
}
.container .form .input-field label{
    
    width:200px;
    margin-right:10px;
    font-size:14px;
}
.container .form .input-field .custom_select
{
   position:relative;
   width:100%;
   height:37px; 
}
.container .form .input-field .custom_select select{
    -webkit-appearance: none;
    appearance: none;

width:100%;
height:100%;
padding:8px 10px;
border:1px solid#D071F9;
    
border-radius:3px;
outline:none;
}

.container .form .input-field .custom_select::before{
    content:"";
    position:absolute;
    top:12px;
    right:10px;
    border:8px solid black;
    border-color:green,#D071F9;
    pointer-events: none;
}

.container .form .input-field .input:focus{
    border:1px solid purple;
}
.container .form .input-field .input:focus,.container .form .input-field .textarea:focus,.container .form .input-field select:focus
{
    border:1px solid purple; 
}

#term{
 font-size:14px;  
 color:grey;
}
.container .form .input-field .check
{
   width:15px; 
   height:15px;
   position:relative;
   display:block;
   cursor:pointer;
}

.container .form .input-field .check input[type="checkbox"]
{
   position:absolute;
   top:0;
   left:0;
   opacity:0;
}

.container .form .input-field .check input[type="checkbox"]:checked~ .checkmark
{
background:#D071F9;
}

.container .form .input-field .check input[type="checkbox"]:checked~ .checkmark:before
{
  background:#D071F9;  
  display:block;
}

.container .form .input_field .btn
{
width:100%;
padding:8px 10px;
font-size:15px;
border:0;
background: #D071F9;
color:white;
cursor:pointer;
border-radius:3px;
outline:none;
}

.container .form .input_field:last-child{
    margin-bottom: 0;
}

.container .form .input_field .btn:hover{
    background:purple;
}


.container .form .input-field .check .checkmark{
width:15px;
height: 15px;
border:1px solid #D071F9;
display:block;
position:relative;

}

.container .form .input-field .check .checkmark:before
{
    content:" ";
position:absolute;
top:1px;
left:2px;
width:5px;
height:2px;
border:2px solid;
border-color:transparent transparent white white;
transform:rotate(-45deg);
}

.input,.container .form .input-field .textarea{
/* border:2px solid black; */
width:100%;
outline:none;
border:1px solid#D071F9;
font-size:15px;
padding:8px 10px;
border-radius:3px;
transition: all 0.5s ease;
} 

.container .form .input-field .textarea 
{
  resize:none;  
  height:80px;
}

@media (max-width:420px)
{
    .container .form .input-field {
        flex-direction:column;
        align-items:flex-start;
    }

    .container .form .input-field label
    {
        margin-bottom: 5px;
    }
    .container .form .input-field .terms{
flex-direction: row;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <form action="help.php" method="POST">
        <div class="title">
            Registration form
        </div>

        <div class="form">
            <div class="input-field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>
        </div>
        <div class="form">
            <div class="input-field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>
        </div>
        <div class="form">
            <div class="input-field">
                <label for="">Password</label>
                <input type="password" class="input" name="password" required>
            </div>
        </div>
        <div class="form">
            <div class="input-field">
                <label for="">Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
            </div>
            <div class="form">
                <div class="input-field">
                    <label for="">Gender</label>
                    <div class="custom_select">
                  <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male" >Male</option>
                    <option value="female" >Female</option>
                    <option value="other" >Other</option>
                    

                  </select>
                </div>
                </div>
            </div>
            <div class="form">
                <div class="input-field">
                    <label for="">Email Address</label>
                    <input type="email" class="input" name="email">
                </div>
        </div>
        <div class="form">
            <div class="input-field">
                <label for="">Phone Number</label>
                <input type="number" class="input" name="phone">
            </div>
            <div class="form">
                <div class="input-field">
                    <label for="">Address</label>
                    <textarea name="address" class="textarea" ></textarea>
                </div>
        </div>
        <div class="form">
            <div class="input-field terms">
          <label class="check">   
          <input type="checkbox" required>
          <span class="checkmark"></span>
      </label> 
      <p id="term">Agree to the terms and conditions</p>
            </div>


    </div>
    <div class="input_field">
        <input type="submit" value="Register" class="btn" name="register">
    </div>
    </div>
</form>
    </div>

</body>
</html>