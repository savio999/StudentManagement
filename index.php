<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Management</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .btn-custom{
                display: block;margin-top: 2%;margin-left: auto;margin-right: auto;width:20%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div style="margin:0px auto;padding-top:5px;">
            <button type="button" class="btn btn-default btn-custom" onclick="window.location.href='/StudentManagement/addStudent.php'">Add Student</button>
            <button type="button" class="btn btn-default btn-custom" onclick="window.location.href='/StudentManagement/viewStudents.php'">View Student List</button>
            </div>
            </div>
    </body>
</html>
