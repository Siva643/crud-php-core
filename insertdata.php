<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
      body{
        background-color:aqua;
      }
    </style>
</head>
<body>
    <div class="container mt-5">
    <form method="post" action="" class="form-groups">
      <div class="form-outline w-50 mt-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control w-50" required placeholder="Enter your name">
     </div>
     <div class="form-outline w-50 mt-3">
      <label class="form-label">Email</label>
      <input type="text" name="email" class="form-control w-50" required placeholder="Enter your email">
     </div>
     <div class="form-outline w-50 mt-3">
      <label class="form-label">Phonenumber</label>
      <input type="text" name="phonenumber" class="form-control w-50" required placeholder="Enter your password">
     </div>
     <div class="mt-3">
      <input type="submit" name="submit" value="submit" class="btn btn-success">
     </div>
    </form>
</div>
<?php
  
  
  if(isset($_POST["submit"]))
  {
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phonenumber=$_POST['phonenumber'];
      
     $connection=mysqli_connect("localhost","root","Siva2000@!","crudtask");
     $insert_query="insert into inserttable(name,email,phonenumber)
     values('$name','$email','$phonenumber')";
     $result=mysqli_query($connection,$insert_query);
     if($result)
     {
        die(mysqli_error($connection));
     }
  }

  

?>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>   

    
</body>
</html>