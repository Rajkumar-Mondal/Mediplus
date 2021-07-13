<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar sticky-top navbar-light bg-primary">
        <a class="navbar-brand" href="#">give details</a>
        <a href="index.php" class="nav-item nav-link bg-warning">home</a>
        </nav>
    <div class="jumbotron container">
    
<form action="controller.php" method="post">
   
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" id="" placeholder="unique"></td>
    </tr>
    <br><br>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" id="" placeholder="password"></td>
    </tr>
    <br><br>
    
   <tr><input type="submit" class="btn btn-primary" name="login" value="login"></tr>
    
    </form>
      <p>don't have a accout?<a href="registerp.php">Sign Up</a></p>
</div>
<?php
 include('footer.php'); 
 ?>

