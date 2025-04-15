<?php
$server="localhost";
$username="root";
$password="1402";
$database="dataconnect";
$connect=new  mysqli($server, $username, $password, $database);
if($connect->connect_error ){
      die("Connection failed");
};
?>