<?php
$name=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];
$gender=$_POST["gender"];
try{
                            $conn= new PDO("mysql:host=localhost;dbname=studentmangdb","root","root");
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt=$conn->prepare("INSERT INTO `students`(`name`, `age`, `email`, `phone`, `gender`, `course_id`) VALUES (?,?,?,?,?,?)");                            
                            $stmt->execute(array($name,$age,$email,$phone,$gender,$course));
                            echo "<p>executed successfully</p>";
                            echo "<a href=\"/StudentManagement/addStudent.php\">Go back to add student page</a>";
                            }catch(PDOException $e)
                            {
                                echo $e->getMessage();
                            }
?>

