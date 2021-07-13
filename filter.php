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
    <div class="jumbotron">
    
<form action="controller.php" method="get">
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
   <tr><input type="submit" class="btn btn-primary" name="filter" value="login"></tr>
    
    </form>
</div>
<?php
 include('footer.php'); 
 ?>

