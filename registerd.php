<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
   
    <nav class="navbar sticky-top navbar-light bg-info">
        <a class="navbar-brand" href="#">give details</a>
        <a href="index.php" class="nav-item nav-link bg-warning">home</a>
        </nav>
    <div class="jumbotron">
    
<form action="controller.php" method="post">
    <tr>
        <td>name:</td>
        <td><input type="text" name="name" id="" placeholder="name" required></td>
    </tr>
    <br><br>
    <tr>
        <td>Registration Id:</td>
        <td><input type="text" name="username" placeholder="unique" required></td>
    </tr>
    <br><br>
    <tr>
        <td>password:</td>
        <td><input type="password" name="password" id="" placeholder="password" required></td>
    </tr>
    <br><br>
    <tr>
        <td>contact number:</td>
        <td></tr>
            <input type="number" name="phno" id="" placeholder="contact number"></td>
    <br><br>
    <tr>
        <td>age:</td>
        <td><input type="number" name="age" id="" placeholder="age"></td>
    </tr>
    <br><br>
    <tr>
        <td>Experience as a Doctor</td>
        <td><textarea name="addr" id="" cols="30" rows="10" placeholder="worked in PG kolkata"></textarea></td>
    </tr>
    <br><br>
    <tr><td>gender:</td>
    <td>    <input type="radio" name="gender" value="male">male</td>
    <td>
        <input type="radio" name="gender" value="female">female</td></tr>

    <br><br>
    <tr>
        <td> <select name="special" id="">
            <option value="cardiologist">cardiologist</option>
            <option value="general">general</option>
            <option value="ginilogist">ginilogist</option>
            <option value="operator">operator</option>
            <option value="bonespecial">bonespecial</option>


          </select></td>
    </tr>
    <br><br>
   <tr><input type="submit" class="btn btn-primary" name="registerd" value="submit"></tr>
    
    </form>
</div>
<?php
 include('footer.php'); 
 ?>

