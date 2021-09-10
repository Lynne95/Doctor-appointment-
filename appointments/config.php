<?php

$server="localhost";
$username="root";
$password="kwamboka";
$database="appointments";
if($config=@mysqli_connect($server,$username,$password,$database)){
    //echo 'Connection successful';
}else{
    echo 'Connection failed!';
}

?>