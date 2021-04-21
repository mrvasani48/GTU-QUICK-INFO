<?php
include_once('database.php');
$user1id =$_GET["user_id"];
$pass =$_GET["password"];
$a="SELECT * FROM `sign_up` WHERE userid='$user1id' ";
$sql1=mysqli_query($conn,$a);
$row=$sql1->fetch_assoc();
if($row['pass'] == $pass)
{
    header("location:term.txt");
}
else{
    header("location:login_page.php?error='username or password incoorect' ");
    
}
?>