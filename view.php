<html>
<head>
    <title>Display Login Details</title>
    <style>
body
{
background:#D071F9;
}
table{
    background-color:white;
}
.update,.delete{
background-color:green;
color:white;
cursor:pointer;
border:0;
outline:none;
border-radius:5px;
height:22px;
width:80px;
font-weight:bold;
}
.delete{
background-color:red;

}
    </style>
</head>

<?php
include("dbcheck.php");
//Select all the data from users
$query="SELECT * FROM users"; 
// Executes the query
$data=mysqli_query($conn, $query);

$total=mysqli_num_rows($data);
// Brings all the data into a page




// echo $total;

if($total!=0)
{
  
    ?>
    <h2 align="center"><mark>Displaying Login Details</mark></h2>
    <center>
    <table border="3px" cellspacing='7px' width="100%">
        <tr>
        <th width="5%">sno</th>
        <th width="10%">Username</th>
        <th width="10%">Password</th>
        <th width="10%">Confirm Password</th>
        <th width="5%">Created at</th>
        <th width="10%">Address</th>
        <th width="10%">City</th>
        <th width="20%">State</th>
        <th width="5%">Zip</th>
        <th width="15%">Operations</th>
        </tr>
<?php    while($result=mysqli_fetch_assoc($data)
    )
    {
      echo"    <tr>
               <td>".  $result['id']."</td>
               <td>".$result['username']."</td>
               <td>".$result['password']."</td>
               <td>".$result['cpassword']."</td>
               
               <td>".$result['created_at']."</td>
               <td>".$result['city']."</td>
               <td>".$result['address']."</td>
               <td>".$result['state']."</td>
               <td>".$result['zip']."</td>

               <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
               <a href='del.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>


              </tr>";

    }
}
else
{
    echo "No records found";
}
?>
 </table>
 </center>

 <script>
function checkdelete(){
    return Confirm('Do you really want to delete? This cannot be reversed');
}
    </script>
