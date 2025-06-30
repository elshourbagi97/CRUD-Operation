<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1 style="text-align:center; margin:50px 0px">HP CRUD SYSTEM BY MYSQL</h1>
        <section class="container">
            <form action="add.php" method="post">
                <div class="row">
                    <div class=" form-group col-4">
                        <label for="" class="mb-1" style="font-weight:500;">UserName</label>
                        <input type="text"required name="name" class="form-control" style="text-transform: capitalize;">
                    </div>
                    <div class="form-group col-3">
                         <label class="mb-1" style="font-weight:500;">Grade</label>
                         <select name="class" required class="form-control">
                            <option value=""> Choose Your Grade</option>
                            <option value="grade 1">Grade 1</option>
                            <option value="grade 2">Grade 2</option>
                            <option value="grade 3">Grade 3</option>
                            <option value="grade 4">Grade 4</option>
                            <option value="grade 5">Grade 5</option>
                            <option value="grade 6">Grade 6</option>
                            <option value="grade 7">Grade 7</option>
                            <option value="grade 8">Grade 8</option>
                            <option value="grade 9">Grade 9</option>
                            <option value="grade 10">Grade 10</option>
                         </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="" class="mb-1" style="font-weight:500;">Marks</label>
                        <input type="number" name="Marks" class="form-control" required max="100">
                    </div>
                    <div class="form-group col-2">
                        <input type="submit" value="Add" name="Submit" class="btn btn1 btn-outline-primary" >
                    </div>
        
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-3">
                       <a href="" name="create" class="btn btn1 btn-outline-primary"> Create </a>
                    </div>
                    <div class="form-group col-3">
                      <a href="DeleteAll.php" name="delete" class="btn btn1 btn-outline-danger">Delete All</a>
                    </div>
                </div>
            </form>
           <table class="table table-dark" >
            <thead>
                <tr >
                    <th class="first-th">Student's ID</th>
                    <th>Student's Name</th>
                    <th>Student's Grade</th>
                    <th>Student's Marks</th>
                    <th>Edit</th>
                     <th class="last-th">Delete</th>
                </tr>
            </thead>
            <?php
                require_once "conn.php";
                $select="SELECT * FROM classroom";
                if($result=$conn->query($select)){
                    while($row=$result->fetch_assoc()){
                       $id = $row['id'];
                       $name = $row['name'];
                       $class = $row['class'];
                       $marks = $row['marks'];

                       ?>
                       <tbody>
                        <tr>
                            <td style="padding-left: 30px"><?php echo $id;?></td>
                            <td style="padding-left: 8px"><?php echo $name;?></td>
                            <td style="padding-left: 30px"><?php echo $class;?></td>
                            <td style="padding-left: 50px " ><?php echo $marks;?></td>
                            <td class="td"><a href="edit.php?id=<?php echo $id ?>" class="btn btn-outline-warning">Edit</a></td>
                            <td class="td"><a href="delete.php?id=<?php echo $id ?>" class="btn btn-outline-danger">Delete</a></td>
                        </tr>
                       </tbody>

                       <?php
                    }
                }
             ?>

           </table>
</section>

    </section>

    <script src="CRUDhomework\bootstrapJS\bootstrap.bundle.min.js"></script>
</body>
</html>