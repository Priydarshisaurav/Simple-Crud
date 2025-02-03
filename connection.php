<?php
$host ="localhost";
$user="root";
$pass="";
$db="crud2";

$conn=mysqli_connect($host,$user,$pass,$db);
if ($conn){
    echo "";
}else {
    echo "database not connected";
}
?>