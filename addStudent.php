<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Management</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
    </head>
    <body>
        <div class="container" style="padding-top:20px;">
            <h3 class="text-center">Add Student</h3>
            <form method="post" action="processAddStudent.php" class="form-horizontal">
                <div class="form-group"> 
                    <div class="col-sm-6">
                    <input type="text" placeholder="Enter name" name="name" class="form-control"/>
                    </div>
                    <div class="col-sm-6">
                    <input type="text" placeholder="Enter age" name="age" class="form-control"/>
                    </div>
                </div>
                 <div class="form-group"> 
                    <div class="col-sm-6">
                    <input type="text" placeholder="Enter email" name="email" class="form-control"/>
                    </div>
                    <div class="col-sm-6">
                    <input type="text" placeholder="Enter phone" name="phone" class="form-control"/>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-6">
                        <select name="gender" class="form-control">
                            <option value="-1">Select gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select name="course" class="form-control">
                            <option value="-1">Select course</option>
                    <?php
                            try{
                            $conn= new PDO("mysql:host=localhost;dbname=studentmangdb","root","root");
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt=$conn->prepare("select * from courses");                            
                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            $stmt->execute();
                            $result=$stmt->fetchAll();
                            foreach($result as $row)
                            {
                                echo "<option value='".$row[id]."'>".$row[courseName]."</option>";
                            }
                            }catch(PDOException $e)
                            {
                                echo $e->getMessage();
                            }
                    ?>
                        </select>
                    </div>
                    <div style="text-align:center">
                        <button type="submit" class="btn btn-default" style="margin-top:2%;">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
