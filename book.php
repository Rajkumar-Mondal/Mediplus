<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
   <div class="container">
    <nav class="navbar sticky-top navbar-light bg-success">
        <a class="navbar-brand" href="#">Mediplus</a>
        <a href="index.php" class="nav-item nav-link bg-warning">home</a>
        </nav>
    <div class="jumbotron">
    
<form action="controller.php" method="post">
    
    
    <br><br>
    <tr>
        <td>Select a Doctor by name:</td>
        <td><div class="container"><select name="doctor" class="input-group"></div>
      <?php     
        $sql="SELECT * FROM `doctor` WHERE 1";
 $con=mysqli_connect("sql108.epizy.com","epiz_25266794","wwzs4p8oexW","epiz_25266794_w968"); 
 $row=mysqli_query($con,$sql);
while($r=mysqli_fetch_assoc($row))
{
echo "<option value=".$r['username'].">".$r['name']."</option>";
}

?>


        </select></td>
    </tr>
    <br><br>
   <tr><input type="submit" class="btn btn-outline-primary" name="book" value="submit"></tr>
    
    </form>
</div>
</div>
<?php

 include('footer.php'); 
 ?>

