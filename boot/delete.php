<?php
include("connection.php");
$id= $_GET['id'];

$query="DELETE FROM form WHERE sno='$id'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo"<script>alert('Record deleted!')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/boot/display.php" />
    <?php
}
else
{
     echo"<script>alert('Record 
      failed to be deleted!')</script>";
}
?>