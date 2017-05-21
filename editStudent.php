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
            <h3 class="text-center">Edit Student details</h3>
            
<?php
$id=$_GET["id"];
                            try{
                            $conn= new PDO("mysql:host=localhost;dbname=studentmangdb","root","root");
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt=$conn->prepare("select * from students where studentid=?");                            
                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            $stmt->execute(array($id));
                            $result=$stmt->fetch();
                                echo "<form method=\"post\" action=\"processEditStudent.php\" class=\"form-horizontal\">".
                                  "<input type=\"hidden\" name=\"id\" value=\"$id\"/>".
                                "<div class=\"form-group\">". 
                                "<div class=\"col-sm-6\">".
                                "<input type=\"text\" placeholder=\"Enter name\" name=\"name\" class=\"form-control\" value=\"".$result["name"]."\"/>".
                                "</div>".
                                "<div class=\"col-sm-6\">".
                                "<input type=\"text\" placeholder=\"Enter age\" name=\"age\" class=\"form-control\" value=\"".$result["age"]."\"/>".
                                "</div>".
                                "</div>".
                             "<div class=\"form-group\">".
                                "<div class=\"col-sm-6\">".
                                "<input type=\"text\" placeholder=\"Enter email\" name=\"email\" class=\"form-control\" value=\"".$result["email"]."\"/>".
                                "</div>".
                                "<div class=\"col-sm-6\">".
                                "<input type=\"text\" placeholder=\"Enter phone\" name=\"phone\" class=\"form-control\" value=\"".$result["phone"]."\"/>".
                                "</div>".
                            "</div>".
                            "<div class=\"form-group\">".
                                "<div class=\"clearfix\">".
                                "<div class=\"col-sm-6\">".
                                    "<select name=\"gender\" class=\"form-control\">".
                                        "<option value=\"-1\">Select gender</option>";
                                        if($result["gender"]=="M")
                                        {
                                            echo "<option value=\"M\" selected>Male</option>";
                                        }else{
                                            echo "<option value=\"M\">Male</option>";
                                        }
                                        
                                        if($result["gender"]=="F")
                                        {
                                             echo "<option value=\"F\" selected>Female</option>";
                                        }else{
                                            echo "<option value=\"F\">Female</option>";

                                        }                                     
                                       
                                   echo "</select>".
                                "</div>".
                                "</div>".    
                                "<div style=\"text-align:center\">".
                                    "<button type=\"submit\" class=\"btn btn-default\" style=\"margin-top:2%;\">Update</button>".
                               "</div>".
                            "</div>".
                        "</form>";
                                    
                            
                            }catch(PDOException $e)
                            {
                                echo $e->getMessage();
                            }
?>
        </div>
    </body>
</html>

