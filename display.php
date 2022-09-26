<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>  

<body>
    <div class="container mt-5">
<table class="table table-bordered">
<thead>
<tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phonenumber</th>
    <th>Update</th>
    <th>delete</th>
</tr>
</thead>
<tbody>
    <?php
    $connection=mysqli_connect("localhost","root","Siva2000@!","crudtask");
    $select_query="Select * from inserttable";
    $result=mysqli_query($connection,$select_query);
    while($data=mysqli_fetch_assoc($result))
    {
        $id=$data['id'];
        $name=$data['name'];
        $email=$data['email'];
        $phonenumber=$data['phonenumber'];
         
        echo '<tr>
         <td>'.$id.'</td>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$phonenumber.'</td>
         <td>
         <a href="update.php?updatedata='.$id.'" class="btn btn-success">Update</a></td>
         <td>
         <a href="delete.php?deletedata='.$id.'" class="btn btn-danger">Delete</a></td>
         </tr>';
    }



    ?>



</tbody>


    
</table>
</div>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>   

    
</body>
</html>