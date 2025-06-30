<?php
require_once "conn.php";
if(isset($_POST['name']) && isset($_POST['class']) && isset($_POST['marks'])){
    $id=$_GET['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $marks = $_POST['marks'];

    $update = " UPDATE classroom set `name`='$name' , `class`='$class' , `marks`='$marks' where id ='$id'";

    if(mysqli_query($conn,$update)){
        header("location: index.php");
    }else{
        echo "there is a problem in updating date";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CRUDhomework/style.css">
    <title>Edit | updating date </title>
</head>
<body>
    <section>
        <h1 style="text-align: center ; margin: 50px 0px">Updating data</h1>

        <?php
            require_once 'conn.php';
            $id = $_GET['id'];
            $getELE = "SELECT * FROM classroom WHERE id = '$id'";
            if($result= $conn->query($getELE)){
                if($row = $result->fetch_assoc()){
                    $id=$row['id'];
                    $name=$row['name'];
                    $class = $row['class'];
                    $marks = $row['marks'];
                }
            }
        ?>

        <div class="container">
           <form action="edit.php?id=<?php echo $id?>" method="post">
            <div class="row">
                <div class="form-group col-4">
                    <label class="mb-1" style="font-weight:500;">UserName</label>
                    <input type="text" name="name" class="form-control" value='<?php echo $name ?>'style="text-transform: capitalize;">
                </div>
                <div class="form-group col-3">
                    <label class="mb-1" style="font-weight:500;">Grade</label>
                    <select name="class"  class="form-control">
                        <option value="grade 1" <?php if($class == "grade 1"){echo "selected";}?>>Grade 1</option>
                        <option value="grade 2" <?php if($class == "grade 2"){echo "selected";}?>>Grade 2</option>
                        <option value="grade 3" <?php if($class == "grade 3"){echo "selected";}?>>Grade 3</option>
                        <option value="grade 4" <?php if($class == "grade 4"){echo "selected";}?>>Grade 4</option>
                        <option value="grade 5" <?php if($class == "grade 5"){echo "selected";}?>>Grade 5</option>
                        <option value="grade 6" <?php if($class == "grade 6"){echo "selected";}?>>Grade 6</option> 
                        <option value="grade 7" <?php if($class == "grade 7"){echo "selected";}?>>Grade 7</option>
                        <option value="grade 8" <?php if($class == "grade 8"){echo "selected";}?>>Grade 8</option>
                        <option value="grade 9" <?php if($class == "grade 9"){echo "selected";}?>>Grade 9</option>
                        <option value="grade 10" <?php if($class == "grade 10"){echo "selected";}?>>Grade 10</option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label class="mb-1" style="font-weight:500;">Marks</label>
                    <input type="number" name="marks" value="<?php echo $marks; ?>" class="form-control" max="100">
                </div>
                <div class="form-group col-2">
                        <input type="submit" value="Update" class="btn btn-outline-primary" style="width:100%;font-weight:500; margin-top: 25.5px; border-width:1.8px;">
                </div>
            </div>
           </form>

          
        </div>
    </section>
</body>
</html>