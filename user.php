<?php
include 'connect.php';
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "insert into `crud` (name, email, mobile, password)
  values('$name','$email','$mobile','$password')";

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
  <nav>
    <div class="logo">Career Adviser</div>
    <ul class="nav-ul">
        <li class="nav-ul"><a href="home.html">Home</a></li>
    
      <li class="nav-ul"><a href="careers.html">Careers</a></li>
      <li class="nav-ul"><a href="index.html">SignIn</a></li>

    </ul>
  </nav>
  <div class="container">
     <form method = "post">
       <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control py-2"
        placeholder = "Enter your name: "
        name="name">
       </div>
       <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control"
        placeholder = "Enter your email: "
        name="email">
       </div>
       <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control"
        placeholder = "Enter your Mobile number: "
        name="mobile">
       </div>
       <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control"
        placeholder = "Enter your password: "
        name="password">
       </div>
      </div>
      


      <button type="submit" name="submit" class="button button1">Submit</button>

    </form>
    
  </body>
</html>