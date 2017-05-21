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
            <h3 class="text-center">View students</h3>
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr><th>Name</th><th>Phone</th>
                <th>Age</th><th>Gender</th><th>Email</th>
                <th>Course</th><th>Delete</th><th>Edit</th></tr>
            <?php
            try{
            $conn=new PDO("mysql:host=localhost;dbname=studentmangdb","root","root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt=$conn->prepare("select s.studentid,s.name,s.phone,s.age,s.gender,s.email,c.courseName "
                    . "from students s "
                    . "JOIN courses c ON s.course_id=c.id");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);            
            $stmt->execute();
            $result=$stmt->fetchAll();
           foreach($result as $row)
           {
                echo "<tr>"
               . "<td>".$row["name"]."</td>"
               . "<td>".$row["phone"]."</td>"
               . "<td>".$row["age"]."</td>"
               . "<td>".$row["gender"]."</td>"
               . "<td>".$row["email"]."</td>"
               . "<td>".$row["courseName"]."</td>"
               . "<td><a href=\"/StudentManagement/deleteStudent.php?id=".$row["studentid"]."\">DELETE</a></td>"
               . "<td><a href=\"/StudentManagement/editStudent.php?id=".$row["studentid"]."\">EDIT</a></td>"
               . "</tr>";
           }
            }
            catch(PDOException $e)
            {
               echo $e->getMessage();
            }
?>
            </table>
            </div>
        </div>
    </body>
</html>
