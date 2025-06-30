<?php
require_once "conn.php";
$deleteAll="DELETE from classroom";
if(mysqli_query($conn,$deleteAll)){
    header("location: index.php");
}else{
    echo "There is a problem in Deleting data ";
}
 ?>