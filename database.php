<?php
$servername='remotemysql.com';
$username='2nEdg1rXAL';
$password='xM6zmGP7R3';
$dbname = "2nEdg1rXAL";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>


