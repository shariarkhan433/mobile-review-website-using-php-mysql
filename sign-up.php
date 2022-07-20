<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

   
    
    $sql="Select * from registration where
    username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
    if($num>0){
        $user=1;
    }else{
        $sql="insert into registration (username,password)
        values('$username','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        
        $success=1;
    }
    else{
        die(mysqli_error($con));
    }
    }
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>signup page</title>
  </head>
  <body>
    <?php
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>User allready exists</strong> You should instead sign in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <?php
    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sign in successful</strong>
        <button type="button" class="exclamation-triangle-fill" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <h1 class="text-center">Sign up page</h1>
    <div class="container mt-5">
    <form action="sign-up.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Name/Email</label>
    <input type="text" class="form-control" placeholder="Enter your username or email"
    name="username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password"
    name="password">
  </div>
  
  <button type="submit" class="btn btn-primary
  w-100 mt-4">Sign up</button>
</form>

    
  </body>
</html>
