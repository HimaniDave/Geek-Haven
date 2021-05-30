<?php 

$username="root";
$password="";
$server="localhost";
$db="geekhaven";

$con= mysqli_connect($server,$username,$password,$db);

if(!$con){
    echo "Something went wrong! " . mysqli_connect_error();

}

?>