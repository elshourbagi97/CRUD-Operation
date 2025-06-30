<?php
if(isset($_POST['Submit'])){
    require_once "conn.php";
    $name=$_POST['name'];
    $class = $_POST['class'];
    $marks=$_POST['Marks'];

    $Add = "INSERT INTO classroom (`name`,`class`,`marks`) VALUES ('$name','$class','$marks')";

    if($name != "" && $class != "" && $marks != ""){
        if(mysqli_query($conn,$Add)){
            header("location: index.php");
        }
        else {
            echo "There is a Problem in adding Student , Please try again !!";
        }
    }else{
        die(mysqli_error($conn));
        echo "Please entering Name , Class and Marks ...!" ;
    }
}else{
    echo "There is a problem";
}
 ?>