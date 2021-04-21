<?php
 $url='localhost';
 $username='root';
 $password='';
 $conn=mysqli_connect($url,$username,$password,"gtu");
 if(!$conn){
     die('Could not Connect My Sql:' .mysql_error());
 }

$userid=$_GET["usrid"];
$email=$_GET["email"];
$pass=$_GET["pass"];
$fname=$_GET["fname"];
$bdate=$_GET["bdate"];
$xender=$_GET["xender"];
if($_GET["submit"]){
$query="INSERT INTO `sign_up` (userid,email,pass,fname,bdate,xender) values ('$userid','$email','$pass','$fname','$bdate','$xender')";
$sql=mysqli_query($conn,$query);
header("location:login_page.php");
}
else{
    header("location:sign_uppage.html");
}
?>