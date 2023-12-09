<?php

session_start();



?>
<html>
<head>
    <title>Display</title>
    <style>
        body{
            background-image: linear-gradient(to right, rgba(211, 19, 221, 0), rgb(119, 0, 255));
        }

        table{
            background-color:white;
        }

        .update,.delete
        {
            background-color:green;
            color:white;
            border:0;
            outline:none;
            border-radius:5px;
            height:22px;
            width:60px;
            font-weight:bold;
            cursor:pointer;

        }

        .delete
        {
            background-color:red;
          
        }
    </style>
</head>

<?php
include("connection.php");
error_reporting(0);
$userprofile=$_SESSION['user_name'];

if($userprofile==true)
{

}
else
{
    header('location:log.php');  
}
$query="SELECT * FROM FORM"; 
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



if($total!=0)
{

   ?> 

   <h2 align="center"><mark>Displaying All records</mark></h2>
  <center> <table border="3px" width="100%" cellspacing="7">
    <tr>
    <th width="5%">sno</th>
    <th width="8%">First Name</th>
    <th width="8%">Last Name</th>
    <th width="10%">Gender</th>
    <th width="20%">Email</th>
    <th width="10%">Phone</th>
    <th width="20%">Address</th>
    <th width="19%">Operations</th>
    </tr>
   <?php
   while($result=mysqli_fetch_assoc($data))
    {
 echo "<tr>
           <td>".$result["sno"]."</td>
            <td>".$result["fname"]."</td>
            <td>".$result["lname"]."</td>
            <td>".$result["gender"]."</td>
            <td>".$result["email"]."</td>
            <td>".$result["phone"]."</td>
            <td>".$result["address"]."</td>
         <td><a href='update_design.php?id=$result[sno]'><input type='submit' value='Update' class='update'></a>
         <a href='delete.php?id=$result[sno]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a>
         </td> 
         
         
      </tr>";
    }
}else
{
    echo"No records founds";
}
?>
</table>
</center>
<a href="finish.php"><input type="submit" name="" value="Logout" style="background:blue; color:white; height:35px; width:100px; margin-top:20px; font-size:18px; border:0; border-radius:5px; cursor:pointer;"></a>
<script>
function checkdelete(){
    return confirm('Are you sure you want to delete this record ?');
}
    </script>

