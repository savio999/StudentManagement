 <?php
 
 $id=$_GET["id"];
            try{
            $conn=new PDO("mysql:host=localhost;dbname=studentmangdb","root","root");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt=$conn->prepare("delete from students where studentid=?");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);            
            $stmt->execute(array($id));
            header("location:/StudentManagement/viewStudents.php");
            }catch(PDOException $e)
            {
                echo $e->getMessage();
            }
?>