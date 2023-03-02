<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


  $sql = "update `crud` set id=$id, name='$name',
   email='$email', mobile='$mobile', password='$password'
   where id=$id";

  $result=mysqli_query($con, $sql);
  if($result)
  {
     header('location:display.php');
  }
  else{
    die(mysqli_error($con));

  }
}


?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="form.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
     <div class="container my-5">
     <form method = "post">
       <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control"
        placeholder = "Enter your name: "
        name="name" value=<?php echo $name;?>>
       </div>
       <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control"
        placeholder = "Enter your email: "
        name="email" value=<?php echo $email;?>>
       </div>
       <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control"
        placeholder = "Enter your Mobile number: "
        name="mobile" value=<?php echo $mobile;?>>
       </div>
       <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control"
        placeholder = "Enter your password: "
        name="password" value=<?php echo $password;?>>
       </div>
      </div>
      


      <button type="submit" name="submit" class="button button1">Update</button>

    </form>
    
  </body>
</html>