<?php/*
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"gtu");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
  $userv= $_GET["userid"] ;
  $query="INSERT INTO `sign_up` (userid) VALUES ($userv)";
  $sql=mysqli_query($conn,$query);
  
 $a="SELECT * FROM `sign_up`";
 $sql1=mysqli_query($conn,$a);
 $row=$sql1->fetch_assoc();

print_r($row['userid']);
//$sql1->fetch_all(MYSQLI_ASSOC)
*/
?>
