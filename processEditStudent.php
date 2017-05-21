<?php
$name=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$id=$_POST["id"];
try{
                            $conn= new PDO("mysql:host=localhost;dbname=studentmangdb","root","root");
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt=$conn->prepare("update students set name = ?,age=?,email=?,phone=?,gender=? where studentid=? ");
                            $stmt->execute(array($name,$age,$email,$phone,$gender,$id));
                            echo "<p>updated successfully</p>";
                            echo "<a href=\"/StudentManagement/editStudent.php?id=$id\">Go back to edit student page</a>";
                            }catch(PDOException $e)
                            {
                                echo $e->getMessage();
                            }
?>

