<?php
require_once "conn.php";
$ID = $_GET['id'];
 $delete = "DELETE FROM classroom WHERE id='$ID'";
 if(mysqli_query($conn,$delete)){
    header('location: index.php');
 }else{
    Echo "There is a problem in deleting process";
 }
 ?>