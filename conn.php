<?php
define("server_name","localHost");
define("username","root");
define("password","123456789");
define("dbname","CRUD");

$conn=mysqli_connect(server_name,username,password,dbname);
if($conn === false){
    die("Error is ". mysqli_connect_error());
}else{
//    echo " connection correct";
}
 ?>
