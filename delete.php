<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <?php
    if(isset($_GET['deletedata']))
       $id=$_GET['deletedata'];
       $connection=mysqli_connect("localhost","root","Siva2000@!","crudtask");
       $delete_query="delete from inserttable where id=$id";
       $result=mysqli_query($connection,$delete_query);
       if($result)
       {
        echo "s";
       }
       else{
        echo "e";
       }


    ?>

    
</body>
</html>